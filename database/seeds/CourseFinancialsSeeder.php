<?php

use App\CourseFinancial;
use Illuminate\Database\Seeder;

class CourseFinancialsSeeder extends Seeder
{

    public function run()
    {
        $courseFinancials = [
            [
                'name'             => 'Limba romana',
                'type'             => 'meditatii',
                'issuer'           => 'Asociatia Top',
                'issue_date'       => '2018-11-05',
                'due_date'         => '2018-11-14',
                'amount'           => 140,
                'payment_date'     => null,
                'remaining_amount' => 140,
                'invoice_link'     => 'http://www.smarthelper.ro',
                'payment_link'     => 'https://www.google.com',
            ],
            [
                'name'             => 'Limba engleza',
                'type'             => 'meditatii',
                'issuer'           => 'Asociatia Top',
                'issue_date'       => '2018-11-01',
                'due_date'         => '2018-11-11',
                'amount'           => 140,
                'payment_date'     => '2018-11-05',
                'remaining_amount' => 0,
                'invoice_link'     => 'http://www.smarthelper.ro',
                'payment_link'     => 'https://www.google.com',
            ],
            [
                'name'             => 'Matematica',
                'type'             => 'meditatii',
                'issuer'           => 'Asociatia Top',
                'issue_date'       => '2018-11-05',
                'due_date'         => '2018-11-10',
                'amount'           => 140,
                'payment_date'     => null,
                'remaining_amount' => 20,
                'invoice_link'     => 'http://www.smarthelper.ro',
                'payment_link'     => 'https://www.google.com',
            ],
            [
                'name'             => 'Istorie',
                'type'             => 'meditatii',
                'issuer'           => 'Asociatia Top',
                'issue_date'       => '2018-11-05',
                'due_date'         => '2018-11-14',
                'amount'           => 140,
                'payment_date'     => null,
                'remaining_amount' => 0,
                'invoice_link'     => 'http://www.smarthelper.ro',
                'payment_link'     => 'https://www.google.com',
            ],
        ];

        foreach ($courseFinancials as $courseFinancial) {
            $this->create($courseFinancial);
        }
    }

    private function create($courseFinancial)
    {
        (new CourseFinancial($courseFinancial))->save();
    }
}
