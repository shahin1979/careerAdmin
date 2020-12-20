<?php

namespace App\Http\Controllers\Bangladesh;

use App\Http\Controllers\Controller;
use App\Models\Bangladesh\District;
use App\Models\Bangladesh\PoliceStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class PoliceStationCO extends Controller
{
    public function index()
    {
//        $stations = PoliceStation::query()->where('district_id',1)->get();
//        dd($stations);

        $districts=District::query()->pluck('name','id');
        return view('bangladesh.police-station-index',compact('districts'));
    }

    public function getPStationsData()
    {
        $stations = PoliceStation::query()->where('status',true)->with('district');

//        dd($stations);

        return DataTables::of($stations)

            ->addColumn('action', function ($stations) {

                return '<div class="btn-category btn-group-sm" role="group" aria-label="Action Button">
                    <button data-rowid="'. $stations->id . '"
                        data-district="'. $stations->district_id . '"
                        data-name="'. $stations->name . '"
                        type="button" class="btn btn-sm btn-station-edit btn-primary"><i>Edit</i></button>
                    <button data-remote="station/delete/'.$stations->id.'"  type="button" class="btn btn-station-delete btn-sm btn-danger"><i>Delete</i></button>
                    </div>

                    ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {

        DB::begintransaction();

        try {

            $ids = SubCategory::query()->create([
                'company_id' => $this->company_id,
                'category_id'=>$request['category_id'],
                'name' => Str::ucfirst($request['name']),
                'status' => true,
                'acc_in_stock' =>$request->filled('acc_in_stock') ? $request['acc_in_stock'] : null,
                'acc_out_stock' =>$request->filled('acc_out_stock') ? $request['acc_out_stock'] : null,
                'user_id' => $this->user_id
            ]);

        }catch (\Exception $e)
        {
            DB::rollBack();
            $error = $e->getMessage();
            return redirect()->back()->with('error',$error);
        }

        DB::commit();

        return redirect()->action('Inventory\Product\SubCategoryCO@index')->with('success','New Sub Category Added');
    }

}
