<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$name = 'Arts and Entertainment';
		$slug = Category::slugify($name);
    	Category::create(['name' => $name, 'slug' => $slug]);

    	$name = 'Computers and Electronics';
		$slug = Category::slugify($name);
    	Category::create(['name' => $name, 'slug' => $slug]);

    	$name = 'Educations and Communications';
		$slug = Category::slugify($name);
    	Category::create(['name' => $name, 'slug' => $slug]);

    	$name = 'Food and Entertaining';
		$slug = Category::slugify($name);
    	Category::create(['name' => $name, 'slug' => $slug]);

    	$name = 'Pets and Animals';
		$slug = Category::slugify($name);
    	Category::create(['name' => $name, 'slug' => $slug]);	
    }
}
