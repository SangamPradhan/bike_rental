<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use App\Events\AdminSendMessage;
use Illuminate\Support\Facades\Auth;

class NoticeController extends BaseController
{
    
    public function __construct()
    {
        $this->title = 'Notices';
        $this->resources = 'admin.notices.';
        $this->route = 'notices.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!auth()->user()->can('notices')) {
            abort(403);
        }
        if ($request->ajax()) {
            $data = Notice::orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('title', function ($row) {
                    return '<p class="text-dark-75 font-weight-normal d-block font-size-h6">' . '#' . $row->id . ' ' . $row->title . '</p>';
                })
                ->editColumn('message', function ($row) {
                    return Str::limit(strip_tags($row->message), 300, '...');
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route
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
        if (!auth()->user()->can('notices.create')) {
            abort(403);
        }
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
            'message' => 'required'
        ]);

        $data = $request->all();
        $notice = new Notice($data);
        $notice->save();

        if ($data['title'] && $data['message']) {
            event(new AdminSendMessage(auth()->user(), $data['title'], $data['message']));
        }
        // $notification = new NewNotification($data['title'], $data['message']);

        return redirect()->route($this->indexRoute());
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('notices.show')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Notice::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->can('notices.edit')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Notice::findOrFail($id);
        //        dd($info);
        return view($this->editResource(), $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'message' => 'required'
        ]);

        $data = $request->all();
        $notice = Notice::findOrFail($id);
        $notice->update($data);

        if ($request->input('title')) {
            $title = $request->input('title');
            $notice->update(['title' => $title]);
            // event(new AdminSendMessage(auth()->user(), $title));
        }

        if ($request->input('message')) {
            $message = $request->input('message');
            $notice->update(['message' => $message]);
            event(new AdminSendMessage(auth()->user(), $title, $message));
        }

        return redirect()->route($this->indexRoute());
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('notices.delete')) {
            abort(403);
        }
        try {
            $item = Notice::findOrFail($id);
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
}
