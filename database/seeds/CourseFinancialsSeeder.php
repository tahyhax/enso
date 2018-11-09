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
                'invoice_link'     => 'https://clienti.smarthelper.ro/factura-41-curs-romana.pdf',
                'payment_link'     => 'https://mpy.ro/sgp03ev',
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
                'invoice_link'     => 'https://clienti.smarthelper.ro/factura-45-curs-engleza.pdf',
                'payment_link'     => '#',
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
                'invoice_link'     => 'https://clienti.smarthelper.ro/factura-51-curs-matematica.pdf',
                'payment_link'     => 'https://mpy.ro/sgp07ev',
            ],
            [
                'name'             => 'Istorie',
                'type'             => 'meditatii',
                'issuer'           => 'Asociatia Top',
                'issue_date'       => '2018-11-05',
                'due_date'         => '2018-11-14',
                'amount'           => 140,
                'payment_date'     => '2018-11-06',
                'remaining_amount' => 0,
                'invoice_link'     => 'https://clienti.smarthelper.ro/factura-57-curs-istorie.pdf',
                'payment_link'     => '#',
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
