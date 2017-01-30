<?php

use Illuminate\Database\Seeder;

class MailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_us')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'company' => str_random(10),
            'message' => str_random(100),
        ]);
    }
}
