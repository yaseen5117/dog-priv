<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetitionJudge extends Model
{
    use HasFactory;
    protected $fillable = ['petition_id','judge_id'];
}
