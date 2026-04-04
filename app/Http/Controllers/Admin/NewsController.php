<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use App\Events\NewNewsAddedEvent;

use App\Notifications\NewNewsAddedNotification;


class NewsController extends BaseController
{
    public function __construct()
    {
        $this->title = 'News & Article';
        $this->resources = 'admin.news.';
        $this->route = 'news.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $user = auth()->user();

            if ($user->hasRole('admin')) {

                $data = News::orderBy('id', 'DESC')->get();
            } elseif ($user->hasRole('staff')) {

                $data = News::where('user_id', $user->id)->orderBy('id', 'DESC')->get();
            } else {

                return response()->json(['data' => []]);
            }

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('title', function ($row) {
                    return '<p class="d-block font-size-h6 font-weight-normal text-dark-75">' . '#' . $row->id . ' ' . $row->title . '</p>';
                })
                // ->editColumn('description', function ($row) {
                //     return Str::limit(strip_tags($row->description), 300, '...');
                // })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'slug' => $data->slug,
                        'route' => $this->route,
                        // 'resourceType' => 'news'
                    ])->render();
                })
                ->rawColumns(['action', 'title'])
                ->make(true);
        }

        $info = $this->crudInfo();
        return view($this->indexResource(), $info);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $info = $this->crudInfo();
        return view($this->createResource(), $info);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'order' => 'nullable|numeric'
        ]);

        $news = new News([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'order' => $request->input('order')
        ]);

        $user = auth()->user();

        if ($user) {

            $news->user_id = $user->id;


            if ($user->hasRole('staff')) {
                event(new NewNewsAddedEvent($news));
            }
        } else {
            return redirect()->route('login')->with('error', 'Please log in to create news articles');
        }


        $news->save();

        if ($request->hasFile('image')) {
            $news->addMediaFromRequest('image')->toMediaCollection();
        }


        return redirect()->route($this->indexRoute());
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('staff')) {
            $info = $this->crudInfo();
            $query = News::where('slug', $slug);


            // // if staff
            // if (auth()->user()->hasRole('staff')) {
            //     $query->where('user_id', auth()->user()->id);
            // }

            $info['item'] = $query->firstOrFail();
            return view($this->showResource(), $info);
        } else {
            abort(403, 'Unauthorized');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        if (auth()->user()->hasRole('admin')) {
            $info = $this->crudInfo();
            $info['item'] = News::where('slug', $slug)->firstOrFail();
            return view($this->editResource(), $info);
        }

        if (auth()->user()->hasRole('staff')) {
            $newsItem = News::where('slug', $slug)
                ->where('user_id', auth()->user()->id)
                ->first();

            if ($newsItem) {
                $info = $this->crudInfo();
                $info['item'] = $newsItem;
                return view($this->editResource(), $info);
            } else {
                abort(403, 'Unauthorized');
            }
        }

        abort(403, 'Unauthorized');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'order' => 'nullable|numeric',
        ]);

        $item = News::findOrFail($id);
        $user = auth()->user();

        if (!$user->hasRole('admin') && ($user->hasRole('staff') && $item->user_id !== $user->id)) {
            abort(403, 'Unauthorized');
        }

        $item->update($request->only(['title', 'description', 'order']));

        if ($request->hasFile('image')) {
            $item->clearMediaCollection();
            $item->addMediaFromRequest('image')->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        try {
            $item = News::findOrFail($id);
            if (auth()->user()->hasRole('admin')) {

                $item->clearMediaCollection();
                $item->delete();
            } elseif (auth()->user()->hasRole('staff')) {

                if ($item->user_id == auth()->user()->id) {
                    $item->clearMediaCollection();
                    $item->delete();
                } else {

                    return redirect()->route($this->indexRoute());
                }
            } else {

                abort(403, 'Unauthorized');
            }
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }

        return redirect()->route($this->indexRoute());
    }

}
