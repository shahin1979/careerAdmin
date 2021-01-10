<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEligibleCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eligible_candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidate_personals')->onDelete('RESTRICT');
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('job_circulars')->onDelete('RESTRICT');
            $table->boolean('eligible')->default(true);
            $table->longText('remarks')->nullable();
            $table->unsignedBigInteger('verified_by');
            $table->foreign('verified_by')->references('id')->on('admins')->onDelete('RESTRICT');
            $table->timestamp('verified_date');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->unique(['candidate_id','job_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eligible_candidates');
    }
}
