<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use App\Models\HelpRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\Help;
use Yajra\DataTables\Facades\DataTables;

class HelpRequestResponseCO extends Controller
{
    public function index()
    {
//        $supports = HelpRequest::query()->with('user','admin')->get();
//
//        dd($supports);

        return view('support.help-request-response-index');
    }

    public function getRequestData()
    {
        $supports = HelpRequest::query()
            ->select('help_requests.*')
            ->with('admin')->with('user');


        return DataTables::of($supports)

            ->addColumn('action', function ($supports) {

                return '<div class="btn-category btn-group-sm" role="group" aria-label="Action Button">
                    <button data-rowid="'. $supports->id . '"
                        data-name="'. $supports->user->name . '"
                        data-subject="'. $supports->subject . '"
                        data-description="'. $supports->description . '"
                        data-remarks="'. $supports->remarks . '"
                        data-helper="'. $supports->id . '"
                        type="button" class="btn btn-sm btn-request-response btn-primary"><i>Response</i></button>
                    </div>

                    ';
            })
            ->addColumn('resolved_by', function ($supports) {
                return $supports->admin->name;
            })
            ->editColumn('description', function ($supports) {
                return nl2br($supports->description);
            })
            ->editColumn('remarks', function ($supports) {
                return nl2br($supports->remarks);
            })
            ->rawColumns(['action','remarks','description'])
            ->make(true);
    }

    public function update(Request $request)
    {
//        dd($request->all());

        DB::begintransaction();

        try {

            $ids = HelpRequest::query()->where('id',$request['support_id'])
                ->update([
                    'remarks'=>$request['remarks'],
                    'resolved' => true,
                    'resolved_by' => Auth::id(),
                    'resolved_date'=>Carbon::now()
            ]);

        }catch (\Exception $e)
        {
            DB::rollBack();
            $error = $e->getMessage();
            return redirect()->back()->with('error',$error);
        }

        DB::commit();

        return redirect()->action('Support\HelpRequestResponseCO@index')->with('success','Response Updated');
    }
}
