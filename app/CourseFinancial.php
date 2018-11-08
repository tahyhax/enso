<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseFinancial extends Model
{
    protected $fillable = ['name', 'type', 'issuer', 'issue_date', 'due_date', 'amount',
        'payment_date', 'remaining_amount', 'invoice_link', 'payment_link', ];
}
