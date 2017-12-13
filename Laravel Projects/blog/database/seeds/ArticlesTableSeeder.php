<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$article = new Article();
        $article->title = 'Android Development';
        $article->body = 'Android Development is not fun';
        $article->save();*/
        factory(App\Article::class,15)->create();
        foreach(Article::all() as $article){
            $article->comments()
                ->saveMany(factory(App\Comment::class,rand(4,8))
                    ->make());
        }
    }
}
