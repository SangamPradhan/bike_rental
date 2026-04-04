<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class StaffController extends BaseController
{

    public function __construct()
    {
        $this->title = 'Staffs';
        $this->resources = 'admin.staffs.';
        $this->route = 'staffs.';

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!auth()->user()->can('staffs')) {
            abort(403);
        }
        if ($request->ajax()) {
            $data = Staff::orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return '<p class="text-dark-75 font-weight-normal d-block font-size-h6">' . $row->name . '</p>';
                })
                ->editColumn('designation', function ($row) {
                    return $row->designation == 'Accountant' ? 'Junior Accountant' : $row->designation;
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'slug' => $data->slug,
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
        if (!auth()->user()->can('staffs.create')) {
            abort(403);
        }
        //
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
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required',
        ]);

        $data = $request->all();
        $staff = new Staff($data);
        $staff->save();

        if ($request->image) {
            $staff->addMediaFromRequest('image')
                ->toMediaCollection();
        }

        // Redirect the user or return a response
        return redirect()->route($this->indexRoute());


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        if (!auth()->user()->can('staffs.show')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Staff::where('slug', $slug)->firstOrFail();
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        if (!auth()->user()->can('staffs.edit')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Staff::where('slug', $slug)->firstOrFail();
        return view($this->editResource(), $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
        ]);

        $staff = Staff::findOrFail($id);
        $data = $request->all();
        // Update staff attributes
        $staff->update($data);

        if ($request->hasFile('image')) {
            $staff->clearMediaCollection();
            $staff->addMediaFromRequest('image')->toMediaCollection();
        }

        return redirect()->route($this->indexRoute());
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('staffs.delete')) {
            abort(403);
        }
        try {
            $item = Staff::findOrFail($id);

            // Clear media collection
            $item->clearMediaCollection();

            // Delete staff record
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }

        return redirect()->route($this->indexRoute());
    }

}
