<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\BaseController;

class BrandController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Brands';
        $this->resources = 'admin.brands.';
        parent::__construct();
        $this->route = 'brands.';
    }

    public function index(Request $request)
    {
        // Custom permission check could be added here if needed, 
        // using existing project patterns (e.g., adminservices)
        
        if ($request->ajax()) {
            $data = Brand::select(['id', 'name', 'type', 'order'])
                ->orderBy('order', 'ASC')
                ->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return $row->name;
                })
                ->editColumn('type', function ($row) {
                    return ucfirst($row->type);
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route
                    ])->render();
                })
                ->make(true);
        }
        $info = $this->crudInfo();
        return view($this->indexResource(), $info);
    }

    public function create()
    {
        $info = $this->crudInfo();
        return view($this->createResource(), $info);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|in:bike,scooter',
            'order' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->only(['name', 'type', 'order']);
        $brand = new Brand($data);
        $brand->save();

        if ($request->hasFile('image')) {
            $brand->addMediaFromRequest('image')
                ->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    public function show($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Brand::findOrFail($id);
        return view($this->showResource(), $info);
    }

    public function edit($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Brand::findOrFail($id);
        return view($this->editResource(), $info);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|in:bike,scooter',
            'order' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $item = Brand::findOrFail($id);
        $item->update($request->all());

        if ($request->hasFile('image')) {
            $item->clearMediaCollection();
            $item->addMediaFromRequest('image')
                ->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    public function destroy($id)
    {
        try {
            $item = Brand::findOrFail($id);
            $item->clearMediaCollection();
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
}
