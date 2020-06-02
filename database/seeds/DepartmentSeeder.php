<?php

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = array('shoes','jewellery','watches','clothes','apparel','electronics','sunglasses');
        collect($departments)->each(function($val, $key){
            Department::create([
                'name' => $val
            ]);
        });
    }
}
