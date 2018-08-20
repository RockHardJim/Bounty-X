<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class Bounties extends Model
{
    //
    protected $fillable = ['id', 'title', 'description', 'latitude', 'longitude', 'project_intake', 'bounty', 'starts', 'ends'];
    public $timestamps = false;
}
