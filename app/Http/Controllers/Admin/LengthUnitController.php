<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\TxnLengthUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LengthUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = TxnLengthUnit::paginate(50);
        return view('backend.admin.length_units.index', compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'unit' => 'required|string|max:50|unique:txn_length_units,unit',
        ],
        [
            'unit.required' => 'Please Enter Length Unit Name',
            'unit.max' => 'Please Enter Length Unit Name in Maximum 50 Character',
            'unit.unique' => $request->unit . ' Length Unit Already Available',
        ]);

        if ($validator->fails()) {
            connectify('error', 'Add Length Unit', $validator->errors()->first());
            return redirect(route('admin.length_units.all'))->withInput();
        }

        TxnLengthUnit::create([
            'unit' => $request->unit,
            'status' => true,
        ]);

        connectify('success', 'Length Unit Added', 'Length Unit has been added successfully !');

        return redirect(route('admin.length_units.all'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $unit = TxnLengthUnit::where('id', $id)->firstOrFail();
            return view('backend.admin.length_units.edit', compact('unit'));
        } catch (\Exception $ex) {
            connectify('error', 'Length Unit Update', 'Whoops, Length Unit Not Found !');
            return redirect(route('admin.length_units.all'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'unit' => 'required|string',
            'status' => 'required|integer|max:1',
        ],
        [
            'unit.required' => 'Please Enter Length Unit',
            'status.required' => 'Please Enter Length Unit Status',
        ]);

        if ($validator->fails()) {
            connectify('error', 'Length Unit Update', $validator->errors()->first());
            return redirect(route('admin.length_units.edit', $id))->withInput();
        }

        try {
            $unit = TxnLengthUnit::where('id', $id)->firstOrFail();
            $unit->update([
                'unit' => $request->unit,
                'status' => $request->status,
            ]);
            connectify('success', 'Length Unit Updated', 'Length Unit has been Updated successfully');
            return redirect(route('admin.length_units.all'));
        } catch (\Exception $ex) {
            connectify('error', 'Length Unit Update', 'Whoops, Something Went Wrong !');
            return redirect(route('admin.length_units.all'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $unit = TxnLengthUnit::where('id', $id)->firstOrFail();
            $unit->delete();
            return redirect(route('admin.length_units.all'))->with('messageSuccess', 'Length Unit has been deleted successfully !');
        } catch (\Exception $ex) {
            return redirect(route('admin.length_units.all'))->with('messageDanger', 'Error, ' . $ex->getMessage());
        }
    }
}
