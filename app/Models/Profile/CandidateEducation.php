<?php

namespace App\Models\Profile;

use App\Models\Education\Examination;
use App\Models\Education\Subject;
use App\Models\Education\University;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEducation extends Model
{
    use HasFactory;

    public function examination()
    {
        return $this->belongsTo(Examination::class,'exam_id','id');
    }

    public function university()
    {
        return $this->belongsTo(University::class,'uni_board_id','id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
}
