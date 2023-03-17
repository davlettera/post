<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Category::where('name', 'politics')->update(['color' => 'lilla']);
    Category::where('name', 'economy')->update(['color' => 'grigio']);
    Category::where('name', 'food&drink')->update(['color' => 'verde']);
    Category::where('name', 'sport')->update(['color' => 'giallo']);
    Category::where('name', 'entertainment')->update(['color' => 'celeste']);
    Category::where('name', 'tech')->update(['color' => 'rosa']);
}

}
