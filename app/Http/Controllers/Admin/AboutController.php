<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

//use Illuminate\Support\Facades\Response;

class AboutController extends Controller
{
    //
    public function show(){

    	//return 'hello';

    	if(view()->exists('default.about')){
    		//return view('default.about')->withTitle('About');
            //=======================================

            // DB::table('pages')->insert([


            // 'name'=>'About our company',
            // 'alias'=>'about',
            // 'text'=>'<p>

            //     Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32

            // </p>'


        //]);


            //===========================================

            

             //DB::insert("INSERT INTO `articles`(`name`,`text`,`img`) VALUES(:name,:text,:img)",['name'=>'Test','text'=>'TExt','img'=>'pict.jpg']);

             //$result = DB::connection()->getPdo()->lastInsertId();
            // $result = DB::update("UPDATE `articles` SET `name` = 'TEST T41' WHERE id = :id",
            //     ['id'=>6]);

            //$result = DB::delete('DELETE FROM `articles` WHERE id=:id',['id'=>6]);


            $page = DB::select("SELECT * FROM `pages` WHERE `alias`=:alias",['alias'=>'about']);

            dump($page);
            //dump($result);

    		$data = ['page'=> $page[0],'title'=>'About'];
    		//$view = view('default.about')->withTitle('About');
    		// return response($view)
    		// ->header('Content-Type','newType');
    		//return response()
            //->view('default.about', $data, 200);
            //->header('Content-Type', $type);
            //return response()->json(['name'=>'hello','secondname'=>'World']);
            //return response()->view('default.about',$data);
            //return response()->download('robots.txt','mytext.txt');

            //return redirect('/articles');
            //return redirect()->action('Admin\ContactController@show()');
            return view('default.about',$data);

    	}

        abort(404);
    }
}
