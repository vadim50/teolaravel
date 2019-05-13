<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\User;
use App\City;
use App\Role;


class Core extends Controller
{
    //
    protected static $articles = []; 

    public function __construct(){
    	//$this->middleware('mymiddle');
    }

    public static function addArticles($array){

        return self::$articles[] = $array;

    }


    public function getArticles(){
    	//echo __METHOD__;
       //$articles = DB::table('articles')->get();
       //$articles = DB::table('articles')->first();
        //$articles = DB::table('articles')->value('name');
    // DB::table('articles')->orderBy('id')->chunk(2,function($articles){

    //         foreach($articles as $article){
    //             Core::addArticles($article);
    //         }

    //     });
    //    //dump($articles);
    //    dump(self::$articles);

        // $articles = DB::table('articles')->pluck('name');
        //$articles = DB::table('articles')->count();
        //$articles = DB::table('articles')->max('id');

        // $articles = DB::table('articles')->select('id','name','text')->get();
        //$articles = DB::table('articles')->select('name')->distinct()->get();
        //$query = DB::table('articles')->select('name');


        //$articles = $query->addSelect('text AS fulltext')->get();

        //$articles = $query->select('text AS fulltext')->where('id','=','3')->get();
        // $articles = $query->select('name','text AS fulltext')
        // ->where('id','>','5')
        // ->where('name','like','test%','or')
        // ->get();

        //  $articles = $query->select('name','text AS fulltext')
        // ->where([['id','>','5'],['name','like','text%','or']])
        // ->get();

        //  $articles = $query->select('name','text AS fulltext')
        // ->where('id','>','5')
        // ->where('name','like','test%')
        // ->orWhere('id','<',2)
        // ->get();

        //$articles = DB::table('articles')->whereBetween('id',[1,5])->get();
        //$articles = DB::table('articles')->whereNotBetween('id',[1,3])->get();
        //$articles = DB::table('articles')->whereIn('id',[1,5])->get();
        //$articles = DB::table('articles')->whereNotIn('id',[1,5])->get();
        //$articles = DB::table('articles')->groupBy('id')->get();
        //$articles = DB::table('articles')->take(4)->get();
         //$articles = DB::table('articles')->take(4)->skip(2)->get();

        // DB::table('articles')->insert(

        //     [
        //         ['name'=>'Test4','text'=>'hello4','img'=>'pict.jpg'],
        //         ['name'=>'TEst5','text'=>'HEllo World5!','img'=>'pict.jpg']

        //     ]
        // );



        // $result = DB::table('articles')->insertGetId(['name'=>'Test4','text'=>'hello4','img'=>'pict.jpg']);

        // // beetwin 1 5

        //$result = DB::table('articles')->where('id','=',14)->update(['name'=>'hellow world']);

        //$result = DB::table('articles')->where('id',14)->delete();

        //DB::table('articles')->increment('name','5');

        // $articles = DB::table('articles')->get();

        // dump($articles);

        //dump($result);

        //$articles = Article::all();

        //$articles = Article::where('id','>',3)->orderBy('name')->take(2)->get();

        // Article::chunk(2, function($articles){

        // });

        //$articles = Article::find(3);
        //$articles = Article::where('id','=',3)->first();

        //$articles = Article::find([1,2,3]);

        //echo $articles->text;

        // foreach($articles as $article){
        //     dump($article->created_at);
        // }

        //$articles = Article::findOrFail(1111);

        //Article::where('id','=',100)->firstOrFail();

        // $article = new Article;

        // $article->name = 'Name New';
        // $article->text = 'Text New!!';
        // $article->img = 'pict21.jpg';

        // Article::where('id',14)
        // ->update(['name'=>'Update Update II']);
        // $article->name = 'Update Article';
        // $article->text = 'Update Text';
        // $article->img = 'img.jpg';

        // $article->save();
        //===================================
            //MODEL
        //====================================
        // Article::create([
        //     'name'=>'Hello modelII',
        //     'text'=>'Some modelII text',
        //     'img'=>'img_modelII.jpg'

        // ]);

        // $article = Article::firstOrCreate([

        //     'name'=>'Hello modelIIV',
        //     'text'=>'Some modelIIV text',
        //     'img'=>'img_modelIIV.jpg'
        // ]);

        // $article = Article::firstOrNew([

        //    'name'=>'Hello modelIIVI',
        //     'text'=>'Some modelIIV text',
        //     'img'=>'img_modelIIV.jpg' 


        // ]);

        // $article->save();

        //DELETE===================

        // $article = Article::find(20);

        // $article->delete();

        //=========================

        //Article::destroy(19);
        //Article::destroy([18,17]);

        //Article::where('id','>',15)->delete();

        //Soft Delete==============

        //========================= make migration soft_delete
        // add to model trait sorft deletes

        // add to model protected $dates = ['deleted_at'];

        // $article = Article::find(3);

        // $article->delete();

        //$articles = Article::withTrashed()->get();
        //Article::withTrashed()->restore();
        //Article::onlyTrashed()->restore();

        // foreach($articles as $article){
        //     if($article->trashed()){
        //         echo $article->id.' Deleted!<br>';
        //         $article->restore();
        //     }else{
        //         echo $article->id.' Не удалена!<br>';
        //     }
        // }

        //delete forse

        //$article = Article::find(15);

        //$article->forceDelete();
        //$user = User::find(1);
        //dump($user->city);
        // $city = City::find(1);
        // dump($city->user);

        //$articles = Article::all();
        //$articles = $user->articles;

        // foreach($articles as $article){
        //     echo $article->name.'<br>';
        // }

        //$articles = $user->articles()->where('id',10)->first();
        //$articles = $user->articles()->where('id','>',10)->get();
        //$article = Article::find(10);


        //dump($article->user()->where('id',1)->first());
        //dump($article->user->name);
        //dump($article);

        //$user = User::find(1);

        // foreach($user->roles as $role){
        //     echo $role->name.'<br>';
        // }


        //dump($user->roles);
        //$role = $user->roles()->where('roles.id',2)->first();
        //$role = Role::find(1);

        //dump($role->users);

        //$articles = Article::all();

        //$articles = Article::with('user')->get();
        //$articles->load('user');
        //$users = User::all();

        // foreach($articles as $article){
        //     echo $article->user->name;
        // }
        //$users = User::with('articles','roles')->get();
        // $users = User::has('articles','>=',5)->get();
        // foreach($users as $user){
            //dump($user->articles);

            //dump($user->roles);

            //dump($user);
            $user = User::find(2);

            // $article = new Article([

            //     'name'=>'New New Article',
            //     'text'=>'Some Text!',
            //     'img'=>'new.jpg'
            // ]);

            //$user->articles()->save($article);
            // $user->articles()->create([

            //     'name'=>'New New Article III',
            //     'text'=>'Some Text III!',
            //     'img'=>'new1.jpg'

            // ]);
            // $user->articles()->saveMany([

            //     new Article(['name'=>'Many articles 1','text'=>'text','img'=>'img.jpg']),
            //     new Article(['name'=>'Many articles 2','text'=>'text','img'=>'img.jpg']),
            //     new Article(['name'=>'Many articles 3','text'=>'text','img'=>'img.jpg'])

            // ]);

            //$role = new Role(['name'=>'quest']);

            //$user->roles()->save($role);
            $user->articles()->where('id','=',19)->update(['name'=>'New Update333']);

            $articles = Article::find(19);

        dump($articles);
        //dump($user->roles);
    }

    public function getArticle($id){
    	echo __METHOD__;
    	echo '<hr>';
    	echo $id;
    }
}
