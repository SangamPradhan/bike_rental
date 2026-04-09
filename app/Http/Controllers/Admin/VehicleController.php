<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vehicle;
use App\Models\Brand;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\BaseController;

class VehicleController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Vehicles';
        $this->resources = 'admin.vehicles.';
        parent::__construct();
        $this->route = 'vehicles.';
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Vehicle::with('brand')->select('vehicles.*')
                ->orderBy('order', 'ASC')
                ->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('brand', function ($row) {
                    return $row->brand ? $row->brand->name : 'N/A';
                })
                ->editColumn('rate_per_day', function ($row) {
                    return 'Nrs. ' . number_format($row->rate_per_day, 2);
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
        $info['brands'] = Brand::orderBy('order', 'ASC')->get();
        return view($this->createResource(), $info);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'title' => 'required|string',
            'engine_cc' => 'required|string',
            'kmpl' => 'required|string',
            'fuel_tank_capacity' => 'required|string',
            'rate_per_day' => 'required|numeric',
            'rate_per_day_outside_valley' => 'required|numeric',
            'type' => 'required|in:bike,scooter',
            'order' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->except(['image']);
        $data['is_promoted'] = $request->has('is_promoted');
        $data['is_active'] = $request->has('is_active');
        
        $item = new Vehicle($data);
        $item->save();

        if ($request->hasFile('image')) {
            $item->addMediaFromRequest('image')
                ->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    public function show($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Vehicle::with('brand')->findOrFail($id);
        return view($this->showResource(), $info);
    }

    public function edit($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Vehicle::findOrFail($id);
        $info['brands'] = Brand::orderBy('order', 'ASC')->get();
        return view($this->editResource(), $info);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'title' => 'required|string',
            'engine_cc' => 'required|string',
            'kmpl' => 'required|string',
            'fuel_tank_capacity' => 'required|string',
            'rate_per_day' => 'required|numeric',
            'rate_per_day_outside_valley' => 'required|numeric',
            'type' => 'required|in:bike,scooter',
            'order' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $item = Vehicle::findOrFail($id);
        $data = $request->except(['image']);
        $data['is_promoted'] = $request->has('is_promoted');
        $data['is_active'] = $request->has('is_active');
        
        $item->update($data);

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
            $item = Vehicle::findOrFail($id);
            $item->clearMediaCollection();
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
}
