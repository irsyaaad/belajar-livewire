<?php

namespace Database\Seeders;
use App\Models\Contacts;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contacts::class,10)->create();
    }
}
