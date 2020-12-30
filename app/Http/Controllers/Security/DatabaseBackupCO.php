<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class DatabaseBackupCO extends Controller
{
    public function index()
    {
        $path = storage_path('app/backup');
        $files = File::allFiles($path);

        return view('security.backup-database-index',compact('files'));
    }

    public function download($filename)
    {
        $file= storage_path(). "/app/backup/".$filename;
        return response()->download($file);
    }

    public function destroy($filename)
    {
        $file= storage_path(). "/app/backup/".$filename;
        File::delete($file);

        return redirect()->action('Security\DatabaseBackupCO@index')->with('success','Backup File Deleted');
    }

    public function store(Request $request)
    {
//        dd('here');
        Artisan::call("db:backup");
        return redirect()->action('Security\DatabaseBackupCO@index')->with('success','Backup Done');
    }
}
