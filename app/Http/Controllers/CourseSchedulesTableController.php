<?php

namespace App\Http\Controllers;

use App\CourseSchedule;
use App\DataTable\CourseSchedulesTableStructure;
use Illuminate\Support\Facades\DB;
use LaravelEnso\DataTable\app\Traits\DataTable;

class CourseSchedulesTableController extends Controller
{
    use DataTable;

    protected $tableStructureClass = CourseSchedulesTableStructure::class;

    public static function getTableQuery()
    {
        $query = CourseSchedule::select(DB::raw('
                    course_schedules.id as DT_RowId, 
                    course_schedules.id as id, 
                    course_schedules.name, 
                    course_schedules.type,
                    course_schedules.location, 
                    course_schedules.monday,
                    course_schedules.tuesday,
                    course_schedules.wednesday, 
                    course_schedules.thursday,
                    course_schedules.friday,
                    course_schedules.saturday,
                    course_schedules.sunday,                    
                    course_schedules.updated_at                         
            '));

        return $query;
    }
}
