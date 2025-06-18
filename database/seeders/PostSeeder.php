<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

Post::create([
'title'=>'post1 ',
'body'=> 'welcome to ower page',
'auther'=>'haneen bakoor',
 'published'=>1


]);    }
}
