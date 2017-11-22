<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $article = new \App\Article();
        $article->title = 'Web Development';
        $article->body = 'Web Development is fun';
        $article->save();*/

        $this->call(UsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
    }
}
