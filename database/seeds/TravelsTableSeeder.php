<?php

use Illuminate\Database\Seeder;
use App\Travels;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Roma = new Travels();
        $Roma->name = 'Super vacanza a Roma!';
        $Roma->price = 320.50;
        $Roma->destination = 'Roma, Riano, Formello';
        $Roma->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $Roma->number_person = 4;
        $Roma->date_departure = '2023-10-14';
        $Roma->date_return = '2023-10-30';
        $Roma->discount = 0;
    }
}
