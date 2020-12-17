<?php

namespace App\Models\Bangladesh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostOffice extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lang',
        'district_id',
        'post_code',
        'name',
        'status',
    ];
}
