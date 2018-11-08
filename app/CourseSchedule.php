<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseSchedule extends Model
{

    protected $fillable = ['name ','type', 'location', 'monday', 'tuesday', 'wednesday',
        'thursday', 'friday', 'saturday', 'sunday',];
}
