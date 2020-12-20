<?php

namespace App\Models\Bangladesh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

//    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lang',
        'name',
        'region',
        'status',
    ];

//    public function parent()
//    {
//        return $this->belongsTo(AccountType::class,'account_type_id','id');
////        return $this->belongsTo('App\Models\Accounts\Common\AccountTypeDetail');
//    }
}
