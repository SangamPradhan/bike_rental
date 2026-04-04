<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Gallery;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class GalleryController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Galleries';
        $this->resources = 'admin.galleries.';
        parent::__construct();
        $this->route = 'galleries.';
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        if (!auth()->user()->can('galleries')) {
            abort(403);
        }
        if ($request->ajax()) {
            $data = Gallery::orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('title', function ($row) {
                    return 'Image #' . $row->id;
                })
                ->editColumn('image', function ($row) {
                    return '<img src="' . $row->getThumbUrlAttribute() . '" class="table-img">';
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route
                    ])->render();
                })
                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        $info = $this->crudInfo();
        return view($this->indexResource(), $info);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        if (!auth()->user()->can('galleries.create')) {
            abort(403);
        }
        $info = $this->crudInfo();
        return view($this->createResource(), $info);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'order' => 'nullable|numeric'
        ]);
        $data = $request->only(['order']);
        $photo = new Gallery($data);
        $photo->save();
        if ($request->image) {
            $photo->addMediaFromRequest('image')
                ->toMediaCollection();
        }
        return redirect()->route($this->indexRoute());
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        if (!auth()->user()->can('galleries.show')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Gallery::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        if (!auth()->user()->can('galleries.edit')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Gallery::findOrFail($id);
        return view($this->editResource(), $info);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $photo = Gallery::findOrFail($id);
        $item->update($request->only(['order']));
        if ($request->image) {
            $photo->clearMediaCollection();
            $photo->addMediaFromRequest('image')
                ->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('galleries.delete')) {
            abort(403);
        }
        try {
            $photo = Gallery::findOrFail($id);
            $photo->clearMediaCollection();
            $photo->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
}
