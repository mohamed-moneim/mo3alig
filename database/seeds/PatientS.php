<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientS extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('patients')->insert([
            'name' => "Ali Ibrahim",
            'age' => "15",
            'gender' => "M",
            'national_id' => "054044",
            'phone' => "45555"
                ]);
        DB::table('patients')->insert([
            'name' => "gamal mamdouh",
            'age' => "22",
            'gender' => "M",
            'national_id' => "3453",
            'phone' => "4567867876555"
                ]);
                DB::table('patients')->insert([
            'name' => "samy farag",
            'age' => "55",
            'gender' => "M",
            'national_id' => "343234234",
            'phone' => "4567867876555"
                ]);
                        DB::table('patients')->insert([
            'name' => "yasser ibrahim",
            'age' => "22",
            'gender' => "M",
            'national_id' => "234234",
            'phone' => "345345345435"
                ]);
    }
}