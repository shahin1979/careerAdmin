<?php

namespace App\Models\Bangladesh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model
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
        'district_id',
        'name',
        'status',
        'user_id'
    ];

    public function district()
    {
        return $this->belongsTo(District::class,'district_id','id');
    }
}
