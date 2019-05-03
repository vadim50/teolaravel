<?php

namespace App\Http\Controllers\Admin;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//use Illuminate\Support\Facades\Response;

class AboutController extends Controller
{
    //
    public function show(){

    	//return 'hello';

    	if(view()->exists('default.about')){
    		//return view('default.about')->withTitle('About');

    		$data = ['title'=>'About'];
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
    }
}
