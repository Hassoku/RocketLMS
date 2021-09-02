<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Webinar;

class AssignmentUpload extends Model
{
    protected $guarded = [];

    public function course(){

        return $this->belongsTo(Webinar::class);
    }
}
