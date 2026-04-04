<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\WomansDayBooking;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class TeejBookingController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Teej Bookings';
        parent::__construct();
        $this->resources = 'admin.teej-bookings.';
        $this->route = 'teej-bookings.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!auth()->user()->can('womans_day_bookings')) {
            abort(403);
        }
        // Set $hideCreate to true to hide the "Add new" button
        $info['hideCreate'] = true;

        $info['title'] = "Bookings";

        if ($request->ajax()) {
            $data = WomansDayBooking::where('type','teej')->orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return $row->name;
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route,
                        'hide_edit' => true,
                        'hide_delete' => true
                    ])->render();
                })
                ->rawColumns(['action', 'name'])
                ->make(true);
        }

        $info = $this->crudInfo();
        // Pass variables to the view
        return view($this->indexResource(), $info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WomansDayBooking  $womansDayBooking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('womans_day_bookings.show')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = WomansDayBooking::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WomansDayBooking  $womansDayBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(WomansDayBooking $womansDayBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WomansDayBooking  $womansDayBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WomansDayBooking $womansDayBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WomansDayBooking  $womansDayBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(WomansDayBooking $womansDayBooking)
    {
        //
    }
}
