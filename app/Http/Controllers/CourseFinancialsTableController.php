<?php

namespace App\Http\Controllers;

use App\CourseFinancial;
use App\DataTable\CourseFinancialsTableStructure;
use Illuminate\Support\Facades\DB;
use LaravelEnso\DataTable\app\Traits\DataTable;

class CourseFinancialsTableController extends Controller
{
    use DataTable;

    protected $tableStructureClass = CourseFinancialsTableStructure::class;

    public static function getTableQuery()
    {
        $query = CourseFinancial::select(DB::raw('
                    course_financials.id as DT_RowId, 
                    course_financials.id as id, 
                    course_financials.name, 
                    course_financials.type,
                    course_financials.issuer, 
                    course_financials.issue_date,
                    course_financials.due_date,
                    course_financials.amount, 
                    course_financials.payment_date,
                    course_financials.remaining_amount,
                    course_financials.invoice_link,
                    course_financials.payment_link,                    
                    course_financials.updated_at                              
            '))
            ;

        return $query;
    }
}
