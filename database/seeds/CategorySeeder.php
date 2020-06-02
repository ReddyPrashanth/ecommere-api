<?php

use Illuminate\Database\Seeder;
use App\Models\Department;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
                        'shoes' => array('boots','sneakers','running'),
                        'jewellery' => array('bracelets','earrings','necklaces'),
                        'watches' => array('classic','automatic','digital'),
                        'clothes' => array('shorts','joggers','shirts','t-shirts','jeans'),
                        'apparel' => array('tops','bottoms'),
                        'electronics' => array('phones','desktops','laptops','tvs'),
                        'sunglasses' => array('aviator','wayfarer','clubmaster')
                    );
        collect($categories)->each(function($val, $key){
            $department = Department::where('name',$key)->firstOrFail();
            collect($val)->each(function($val, $key) use ($department){
                $category = new Category();
                $category->name = $val;
                $category->department_id = $department->id;
                $category->save();
            });
        });
    }
}
