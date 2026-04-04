<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Testimonials';
        $this->resources = 'admin.testimonials.';
        $this->route = 'testimonials.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (!auth()->user()->can('testimonials')) {
            abort(403);
        }

        if ($request->ajax()) {
            $data = Testimonial::orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return '<p class="d-block font-size-h6 font-weight-normal text-dark-75">' . '#' . $row->id . ' ' . $row->name . '</p>';
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

                ->rawColumns(['action', 'name'])
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

        if (!auth()->user()->can('testimonials.create')) {
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
            'name' => 'required',
            'message' => 'required',
            'order' => 'nullable|numeric'
        ]);
        $data = $request->only(['name', 'message', 'order']);
        $testimonial = new Testimonial($data);
        $testimonial->save();
        if ($request->image) {
            $testimonial->addMediaFromRequest('image')
                ->toMediaCollection();
        }
        return redirect()->route($this->indexRoute());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('testimonials.show')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Testimonial::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->can('testimonials.edit')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Testimonial::findOrFail($id);
        //        dd($info);
        return view($this->editResource(), $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'order' => 'nullable|numeric'
        ]);
        $data = $request->only(['name', 'message', 'order']);
        $item = Testimonial::findOrFail($id);
        $item->update($data);
        if ($request->image) {
            $item->clearMediaCollection();
            $item->addMediaFromRequest('image')
                ->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('testimonials.delete')) {
            abort(403);
        }
        try {
            $item = Testimonial::findOrFail($id);
            $item->clearMediaCollection();
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
}
