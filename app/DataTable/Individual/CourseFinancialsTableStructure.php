<?php
/**
 * Created with luv for smarthelper.
 * User: mihai
 * Date: 11/8/18
 * Time: 10:47 AM.
 */

namespace App\DataTable\Individual;

use LaravelEnso\DataTable\app\Classes\TableStructure;

class CourseFinancialsTableStructure extends TableStructure
{
    public function __construct()
    {
        $this->data = [

            'tableName'           => __('Financial Situation'),
            'crtNo'               => __('#'),
            'actionButtons'       => __('Actions'),
            'customActionButtons' => [
                ['class' => 'btn-danger fa fa-cc-visa', 'event' => 'pay'],
            ],
            'headerAlign'   => 'center',
            'bodyAlign'     => 'center',
            'render'        => [8],
            'notSearchable' => [],
            'boolean'       => [],
            'appends'       => [],
            'columns'       => [

                0 => [
                    'label' => __('Course Name'),
                    'data'  => 'name',
                    'name'  => 'name',
                ],
                1 => [
                    'label' => __('Type'),
                    'data'  => 'type',
                    'name'  => 'type',
                ],
                2 => [
                    'label' => __('Issuer'),
                    'data'  => 'issuer',
                    'name'  => 'issuer',
                ],
                3 => [
                    'label' => __('Issue Date'),
                    'data'  => 'issue_date',
                    'name'  => 'issue_date',
                ],
                4 => [
                    'label' => __('Due Date'),
                    'data'  => 'due_date',
                    'name'  => 'due_date',
                ],
                5 => [
                    'label' => __('Amount'),
                    'data'  => 'amount',
                    'name'  => 'amount',
                ],
                6 => [
                    'label' => __('Payment Date'),
                    'data'  => 'payment_date',
                    'name'  => 'payment_date',
                ],
                7 => [
                    'label' => __('Remaining Amount'),
                    'data'  => 'remaining_amount',
                    'name'  => 'remaining_amount',
                ],
                8 => [
                    'label' => __('Invoice'),
                    'data'  => 'invoice_link',
                    'name'  => 'invoice_link',
                ],
            ],
        ];
    }
}
