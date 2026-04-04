<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\InternationalBooking;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class InternationalBookingController extends BaseController
{
    public function __construct()
    {
        $this->title = 'International Booking';
        parent::__construct();
        $this->resources = 'admin.international-bookings.';
        $this->route = 'international-bookings.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!auth()->user()->can('international_bookings')) {
            abort(403);
        }
        // Set $hideCreate to true to hide the "Add new" button

        $hideCreate = true;

        $title = "International Bookings";

        if ($request->ajax()) {
            $data = InternationalBooking::orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return '#' . $row->id . ' ' . $row->name;
                })
                ->editColumn('email', function ($row) {
                    return $row->email;
                })

                ->editColumn('country', function ($row) {
                    return $row->country;
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
        return view($this->indexResource(), compact('info', 'hideCreate', 'title'));
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
     * @param  \App\Models\InternationalBooking  $internationalBooking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('international_bookings.show')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = InternationalBooking::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InternationalBooking  $internationalBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(InternationalBooking $internationalBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InternationalBooking  $internationalBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InternationalBooking $internationalBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InternationalBooking  $internationalBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(InternationalBooking $internationalBooking)
    {
        //
    }
}
