<?php

namespace App\Models\Profile;

use App\Models\Education\Examination;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEducation extends Model
{
    use HasFactory;

    public function examination()
    {
        return $this->belongsTo(Examination::class,'exam_id','id');
    }
}
