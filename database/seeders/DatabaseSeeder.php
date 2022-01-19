<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\Tool;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {

    User::create([
      'name' => 'Muhammad Lutfi',
      'username' => 'muhammadlutfi',
      'email' => 'muhammadlutfi3101@gmail.com',
      'password' => bcrypt('@password'),
      'is_admin' => 1,
    ]);

    User::create([
      'name' => 'Ahla Ainin Nafisah',
      'username' => 'ahlaainin',
      'email' => 'ahlaainin@gmail.com',
      'password' => bcrypt('@password'),
      'is_admin' => 0,
    ]);

    Category::create([
      'name' => 'Development',
      'slug' => 'development',
      'icon' => 'fa fa-laptop-code',
    ]);

    Category::create([
      'name' => 'Business',
      'slug' => 'business',
      'icon' => 'fa fa-chart-bar',
    ]);

    Category::create([
      'name' => 'Finance & Accounting',
      'slug' => 'finance-and-accounting',
      'icon' => 'fa fa-wallet',
    ]);

    Category::create([
      'name' => 'IT & Software',
      'slug' => 'it-and-software',
      'icon' => 'fa fa-desktop',
    ]);
    Category::create([
      'name' => 'Design',
      'slug' => 'design',
      'icon' => 'fa fa-pencil-ruler',
    ]);
    Category::create([
      'name' => 'Data Analyst',
      'slug' => 'data-analyst',
      'icon' => 'fa fa-mail-bulk',
    ]);
    Category::create([
      'name' => 'Music',
      'slug' => 'music',
      'icon' => 'fa fa-music',
    ]);


    Tool::create([
      'name' => 'Figma',
      'lisence' => 'Free'
    ]);
    Tool::create([
      'name' => 'VS Code',
      'lisence' => 'Free'
    ]);
    Tool::create([
      'name' => 'Github',
      'lisence' => 'Free'
    ]);
    Tool::create([
      'name' => 'Chrome',
      'lisence' => 'Free'
    ]);


    Course::create([
      'name' => 'Jalur Belajar Frontend Web Developer',
      'author' => 'Web Programming Unpas',
      'lisence' => 'Gratis',
      'basic_learning' => 'Youtube',
      'thumbnail' => 'wpu.png',
    ]);

    Course::create([
      'name' => 'Mastering Laravel 8',
      'author' => 'Buildwith Angga',
      'lisence' => 'Berbayar',
      'basic_learning' => 'Website',
      'thumbnail' => 'bwa.png',
    ]);

    Course::create([
      'name' => 'HTML Dasar',
      'author' => 'Dicoding Indonesia',
      'lisence' => 'Gratis',
      'basic_learning' => 'Website',
      'thumbnail' => 'dicoding.png',
    ]);

    // Post::factory(50)->create();
  }
}
