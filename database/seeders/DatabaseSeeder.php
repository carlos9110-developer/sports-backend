<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            ['name' => 'Risaralda'],
            ['name' => 'Caldas'],
            ['name' => 'Quindío']
        ]);

        DB::table('municipalities')->insert([
            ['name' => 'Pereira', 'department_id' => 1],
            ['name' => 'Apia', 'department_id' => 1],
            ['name' => 'Balboa', 'department_id' => 1],
            ['name' => 'Dosquebradas', 'department_id' => 1],
            ['name' => 'Manizales', 'department_id' => 2],
            ['name' => 'Riosucio', 'department_id' => 2],
            ['name' => 'Anserma', 'department_id' => 2],
            ['name' => 'Armenia', 'department_id' => 3],
            ['name' => 'Salento', 'department_id' => 3],
            ['name' => 'Quimbaya', 'department_id' => 3],
        ]);

        DB::table('activities')->insert([
            ['name' => 'Recreación'],
            ['name' => 'Acvidad Fisica'],
            ['name' => 'Baile'],
            ['name' => 'Gimnasia'],
            ['name' => 'Futbol'],
        ]);

        DB::table('service_providers')->insert([
            ['name' => 'Clubes'],
            ['name' => 'Academias'],
            ['name' => 'Insituciones Públicas'],
            ['name' => 'Profesionales Independientes']
        ]);

        DB::table('institutions')->insert([
            [
                'name' => 'Club deportivo tapitas',
                'with_registration' => true,
                'address' => 'samaria 2',
                'municipality_id' => 1,
                'service_provider_id' => 1,
                'subscription_type' => 1,
            ],
            [
                'name' => 'Centro de actividad fisica',
                'with_registration' => false,
                'address' => 'poblado 2',
                'municipality_id' => 2,
                'service_provider_id' => 2,
                'subscription_type' => 2,
            ],
            [
                'name' => 'Club de natación agua fria',
                'with_registration' => true,
                'address' => 'los laureles',
                'municipality_id' => 5,
                'service_provider_id' => 3,
                'subscription_type' => 3,
            ],
            [
                'name' => 'Jesus eduardo, entrenador personal',
                'with_registration' => false,
                'address' => 'Sna luis',
                'municipality_id' => 6,
                'service_provider_id' => 4,
                'subscription_type' => 1,
            ],
            [
                'name' => 'Club de futbol nuevo mexico',
                'with_registration' => true,
                'address' => 'El centro',
                'municipality_id' => 8,
                'service_provider_id' => 1,
                'subscription_type' => 1,
            ],
            [
                'name' => 'Centro terapia fisica',
                'with_registration' => false,
                'address' => 'naranjito',
                'municipality_id' => 8,
                'service_provider_id' => 2,
                'subscription_type' => 2,
            ],
            [
                'name' => 'Centro terapia fisica II',
                'with_registration' => true,
                'address' => 'naranjito II',
                'municipality_id' => 8,
                'service_provider_id' => 2,
                'subscription_type' => 3,
            ]
        ]);

        
        DB::table('activity_institution')->insert([
            ['activity_id' => 1, 'institution_id' => 1],
            ['activity_id' => 2, 'institution_id' => 2],
            ['activity_id' => 3, 'institution_id' => 3],
            ['activity_id' => 4, 'institution_id' => 4],
            ['activity_id' => 5, 'institution_id' => 5],
            ['activity_id' => 1, 'institution_id' => 6],
            ['activity_id' => 2, 'institution_id' => 1],
            ['activity_id' => 3, 'institution_id' => 1],
        ]);
        
    }
}
