<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ["WebApp", "Mobile Application", "Website", "CRM", "Managment website"];

        foreach ($types as $type) {
            $newType = new Type();

            $newType->name = $type;

            $newType->save();
        }
    }
}
