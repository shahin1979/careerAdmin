<?php

namespace App\Models\Examination;

use App\Models\Admin;
use App\Models\Admin\JobCircular;
use App\Models\Profile\CandidatePersonal;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EligibleCandidate extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'candidate_id',
        'job_id',
        'eligible',
        'remarks',
        'verified_by',
        'verified_date'
    ];

    public function profile()
    {
        return $this->belongsTo(CandidatePersonal::class,'candidate_id','id');
    }

    public function circular()
    {
        return $this->belongsTo(JobCircular::class,'job_id','id');
    }

    public function user()
    {
        return $this->belongsTo(Admin::class,'verified_by','id');
    }
}
