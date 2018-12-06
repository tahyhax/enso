<?php

use App\IndividualCourseFinancial;
use Illuminate\Database\Seeder;

class IndividualCourseFinancialsSeeder extends Seeder
{
    public function run()
    {
        $courseFinancials = [
            [
                'name'             => 'Curs matematica',
                'type'             => 'meditatii',
                'issuer'           => 'Asociatia Top',
                'issue_date'       => '2018-12-07',
                'due_date'         => '2018-12-22',
                'amount'           => 140,
                'payment_date'     => null,
                'remaining_amount' => 5,
                'invoice_link'     => null,
                'payment_link'     => 'https://mpy.ro/sgp03ev',
            ],
        ];

        foreach ($courseFinancials as $courseFinancial) {
            $this->create($courseFinancial);
        }
    }

    private function create($courseFinancial)
    {
        (new IndividualCourseFinancial($courseFinancial))->save();
    }
}
