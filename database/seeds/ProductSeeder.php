<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laptopCategory = Category::where('name', 'laptops')->firstOrFail();
        for ($i=1; $i <= 30; $i++) {
            Product::create([
                'name' => 'Laptop '.$i,
                'price' => rand(149999, 249999)/100,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach($laptopCategory);
        }

        $desktopCategory = Category::where('name', 'desktops')->firstOrFail();
        // Make Laptop 1 a Desktop as well. Just to test multiple categories
        $product = Product::find(1);
        $product->categories()->attach($desktopCategory);

        // Desktops
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Desktop ' . $i,
                'price' => rand(149999, 249999)/100,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach($desktopCategory);
        }

        $phoneCategory = Category::where('name', 'phones')->firstOrFail();
        // Phones
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Phone ' . $i,
                'price' => rand(79999, 149999)/100,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach($phoneCategory);
        }

        $bootCategory = Category::where('name', 'boots')->firstOrFail();
        //boots
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Boot ' . $i,
                'price' => rand(79999, 149999)/100,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach($bootCategory);
        }

        $sneakerCategory = Category::where('name', 'sneakers')->firstOrFail();
        //sneakers
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Sneaker ' . $i,
                'price' => rand(79999, 149999)/100,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach($sneakerCategory);
        }

        $runningCategory = Category::where('name', 'running')->firstOrFail();
        //running shoes
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Running ' . $i,
                'price' => rand(79999, 149999)/100,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach($runningCategory);
        }

        $shortCategory = Category::where('name', 'shorts')->firstOrFail();
        //shorts
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Short ' . $i,
                'price' => rand(79999, 149999)/100,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach($shortCategory);
        }

        $joggerCategory = Category::where('name', 'joggers')->firstOrFail();
        //joggers
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Jogger ' . $i,
                'price' => rand(79999, 149999)/100,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach($joggerCategory);
        }

        $shirtCategory = Category::where('name', 'shirts')->firstOrFail();
        //shirts
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Shirt ' . $i,
                'price' => rand(79999, 149999)/100,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach($shirtCategory);
        }

        Product::whereIn('id', [1, 12, 22, 31, 41, 43, 47, 51, 53,61, 69, 73, 80])->update(['featured' => true]);
    }
}
