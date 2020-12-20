<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpRequest extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class,'resolved_by','id')->withDefault();
    }
}
