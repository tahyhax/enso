<?php

namespace App\Http\Controllers\Individual;

use App\DataTable\CourseFinancialsTableStructure;
use App\Http\Controllers\Controller;
use App\IndividualCourseFinancial;
use Illuminate\Support\Facades\DB;
use LaravelEnso\DataTable\app\Traits\DataTable;

class CourseFinancialsTableController extends Controller
{

    use DataTable;

    protected $tableStructureClass = CourseFinancialsTableStructure::class;

    public static function getTableQuery()
    {
        $query = IndividualCourseFinancial::select(DB::raw('
                    id as DT_RowId, 
                    id as id, 
                    name, 
                    type,
                    issuer, 
                    issue_date,
                    due_date,
                    amount, 
                    payment_date,
                    remaining_amount,
                    invoice_link,
                    payment_link,                    
                    updated_at                              
            '));

        return $query;
    }
}
