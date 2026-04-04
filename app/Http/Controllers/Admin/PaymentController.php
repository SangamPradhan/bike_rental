<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Booking;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Mail\PaymentConfirmationMail;
use Illuminate\Support\Facades\Mail;

class PaymentController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Payments';
        parent::__construct();
        $this->resources = 'admin.payments.';
        $this->route = 'payments.';
    }

    public function index(Request $request)
    {
        if (!auth()->user()->can('payments')) {
            abort(403);
        }

        $hideCreate = true;
        $title = "Payments";

        if ($request->ajax()) {
            $data = Booking::orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return '#' . $row->id . ' ' . $row->name;
                })
                ->editColumn('status', function ($row) {
                    return ucfirst($row->status);
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route,
                        'hide_edit' => true,
                        'hide_delete' => true,
                        'show_check' => true,
                        'status' => $data->status
                    ])->render();
                })
                ->rawColumns(['action', 'name', 'status'])
                ->make(true);
        }

        $info = $this->crudInfo();
        return view($this->indexResource(), compact('info', 'hideCreate', 'title'));
    }

    public function show($id)
    {
        if (!auth()->user()->can('payments.show')) {
            abort(403);
        }

        $info = $this->crudInfo();
        $info['item'] = Booking::findOrFail($id);
        return view($this->showResource(), $info);
    }

    public function markAsPaid($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'paid';
        $booking->save();

        // Send payment confirmation email
        Mail::to($booking->email)->send(new PaymentConfirmationMail($booking));

        return redirect()->route('payments.index')->with('success', 'Payment status updated to Paid.');
    }

    // Add other CRUD methods as needed
}
