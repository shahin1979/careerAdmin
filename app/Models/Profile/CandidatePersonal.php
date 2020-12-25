<?php

namespace App\Models\Profile;

use App\Models\Bangladesh\District;
use App\Models\Bangladesh\PoliceStation;
use App\Models\Common\Religion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatePersonal extends Model
{
    use HasFactory;

    public function pm_district()
    {
        return $this->belongsTo(District::class,'pm_district_id','id');
    }

    public function pm_thana()
    {
        return $this->belongsTo(PoliceStation::class,'pm_police_station_id','id');
    }

    public function pr_district()
    {
        return $this->belongsTo(District::class,'pr_district_id','id');
    }

    public function education()
    {
        return $this->hasMany(CandidateEducation::class,'candidate_id','id');
    }

    public function application()
    {
        return $this->hasOne(CandidateAppliedJob::class,'candidate_id','id');
    }

    public function language()
    {
        return $this->hasMany(CandidateLanguage::class,'candidate_id','id');
    }

    public function reference()
    {
        return $this->hasMany(CandidateReference::class,'candidate_id','id');
    }

    public function document()
    {
        return $this->hasMany(CandidateDocument::class,'candidate_id','id');
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class,'religion_id','id');
    }
}
