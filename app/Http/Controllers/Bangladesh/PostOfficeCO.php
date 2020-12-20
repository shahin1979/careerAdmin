<?php

namespace App\Http\Controllers\Bangladesh;

use App\Http\Controllers\Controller;
use App\Models\Bangladesh\District;
use App\Models\Bangladesh\PoliceStation;
use App\Models\Bangladesh\PostOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class PostOfficeCO extends Controller
{
    public function index()
    {
        $districts=District::query()->pluck('name','id');
        return view('bangladesh.post-office-index',compact('districts'));
    }

    public function getPOfficeData()
    {
        $posts = PostOffice::query()->where('status',true)->with('district');

        return DataTables::of($posts)

            ->addColumn('action', function ($posts) {

                return '<div class="btn-category btn-group-sm" role="group" aria-label="Action Button">
                    <button data-rowid="'. $posts->id . '"
                        data-district="'. $posts->district_id . '"
                        data-name="'. $posts->name . '"
                        data-code="'. $posts->psot_code . '"
                        type="button" class="btn btn-sm btn-station-edit btn-primary"><i>Edit</i></button>
                    <button data-remote="posts/delete/'.$posts->id.'"  type="button" class="btn btn-station-delete btn-sm btn-danger"><i>Delete</i></button>
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

            PostOffice::query()->create([
                'lang' => 'en',
                'district_id'=>$request['district_id'],
                'name' => Str::ucfirst($request['name']),
                'post_code' => Str::ucfirst($request['post_code']),
                'status' => true,
                'user_id' => Auth::id()
            ]);

        }catch (\Exception $e)
        {
            DB::rollBack();
            $error = $e->getMessage();
            return redirect()->back()->with('error',$error);
        }

        DB::commit();

        return redirect()->action('Bangladesh\PostOfficeCO@index')->with('success','New Post Office '.Str::ucfirst($request['name']).' Added');
    }
}
