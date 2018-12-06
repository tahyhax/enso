<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class IndividualCourseFinancial extends Model
{
    protected $fillable = ['name', 'type', 'issuer', 'issue_date', 'due_date', 'amount',
        'payment_date', 'remaining_amount', 'invoice_link', 'payment_link', ];

    //********** Getters & Setters **********
    public function getIssueDateAttribute($value)
    {
        return $value ? Date::parse($value)->format('d-m-Y') : null;
    }

    public function getDueDateAttribute($value)
    {
        return $value ? Date::parse($value)->format('d-m-Y') : null;
    }

    public function getPaymentDateAttribute($value)
    {
        return $value ? Date::parse($value)->format('d-m-Y') : null;
    }
}
