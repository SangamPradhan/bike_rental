<?php

namespace App\Http\Controllers\Admin;

use App\Models\Services;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Controllers\Controller;

class ServiceController extends BaseController
{

    public function __construct()
    {
        $this->title = 'Services';
        $this->resources = 'admin.services.';
        parent::__construct();
        $this->route = 'adminservices.';
    }

    public function index(Request $request)
    {
        if (!auth()->user()->can('adminservices')) {
            abort(403);
        }
        if ($request->ajax()) {
            $data = Services::select(['id', 'title', 'description', 'price', 'order']) // Add 'order' here
                ->orderBy('id', 'DESC')
                ->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('title', function ($row) {
                    return $row->title; // Change this line to display the actual title
                })
                ->editColumn('order', function ($row) {
                    return $row->order;
                })
                ->editColumn('description', function ($row) {
                    return strip_tags($row->description);
                })
                ->editColumn('price', function ($row) {
                    return 'Rs. ' . number_format($row->price, 2);
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
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        if (!auth()->user()->can('adminservices.create')) {
            abort(403);
        }

        $info = $this->crudInfo();
        return view($this->createResource(), $info);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'price_two' => 'nullable|numeric',
            'price_three' => 'nullable|numeric',
            'time_one' => 'nullable|integer|min:15|max:150',
            'time_two' => 'nullable|integer|min:15|max:150',
            'time_three' => 'nullable|integer|min:15|max:150',
            'order' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Only get the fillable data
        $data = $request->only(['title', 'description', 'category', 'price','order', 'price_two', 'price_three', 'time_one', 'time_two', 'time_three']);
        $service = new Services($data);
        $service->save();

        if ($request->hasFile('image')) {
            $service->addMediaFromRequest('image')
                ->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $testimonial
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        if (!auth()->user()->can('adminservices.show')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Services::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $service
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->can('adminservices.edit')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Services::findOrFail($id);
        //        dd($info);
        return view($this->editResource(), $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $testimonial
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable',
            'category' => 'required',
            'price' => 'required|numeric',
            'price_two' => 'nullable|numeric',
            'price_three' => 'nullable|numeric',
            'time_one' => 'nullable|integer|min:15|max:150',
            'time_two' => 'nullable|integer|min:15|max:150',
            'time_three' => 'nullable|integer|min:15|max:150',
            'order' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $data = $request->all();
        $item = Services::findOrFail($id);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('adminservices.delete')) {
            abort(403);
        }
        try {
            $item = Services::findOrFail($id);
            $item->clearMediaCollection();
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
}
