<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Popup;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class PopupController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Popups';
        $this->resources = 'admin.popups.';
        $this->route = 'popups.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!auth()->user()->can('popups')) {
            abort(403);
        }
        $hideCreate = true;
        $title = "Popups";
        if ($request->ajax()) {
            $data = Popup::orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('title', function ($row) {
                    return '#' . $row->id . ' ' . $row->title;
                })

                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route,
                        'hide_delete' => true
                    ])->render();
                })

                ->rawColumns(['action', 'text'])
                ->make(true);
        }
        $info = $this->crudInfo();
        return view($this->indexResource(), compact('info', 'hideCreate', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('popups.create')) {
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
    { {
            $request->validate([
                'text' => 'required',

            ]);
            $data = $request->all();
            $popup = new Popup($data);
            $popup->save();
            if ($request->image) {
                $popup->addMediaFromRequest('image')
                    ->toMediaCollection();
            }
            return redirect()->route($this->indexRoute());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('popups.show')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Popup::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->can('popups.edit')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = Popup::findOrFail($id);
        //        dd($info);
        return view($this->editResource(), $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required',

        ]);
        $data = $request->all();
        $item = Popup::findOrFail($id);
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
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('popups.delete')) {
            abort(403);
        }
        try {
            $item = Popup::findOrFail($id);
            $item->clearMediaCollection();
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute());
        }
        return redirect()->route($this->indexRoute());
    }
}
