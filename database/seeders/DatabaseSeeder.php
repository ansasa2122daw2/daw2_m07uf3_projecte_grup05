<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('usuaris')->insert([
            'nom' => 'Felipez',
            'cognom' => 'Romero',
            'email' => 'felipezromero@gmail.com',
            'contrasenya' => 'password',
            'tipus' => 'cap_departament',
            'hora_entrada' => '2022-03-22 17:39:00',
            'hora_sortida' => '2022-03-22 17:39:00'
        ]);
    }
}
