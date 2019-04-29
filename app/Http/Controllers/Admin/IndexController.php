<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show(){

    	//$data = ['title'=>'HEllo Framework!'];
 
    	//return view('default.template',$data);

    	// $data = ['title'=>'hello laravel1','title2'=>'hello laravel2','title3'=>'hello laravel3'];
    	// return view('default.template',$data);

    	// $view = view('default.template');

    	// $view->with('title','hello 1');
    	// $view->with('title2','hello 2');
    	// $view->with('title3','hello 3');

    	// return $view;
    	if(view()->exists('default.index')){
    	// 	$path = config('view.paths');
    	// 	return view()->file($path[0].'/default/template.php')->withTitle('hello laravel');
    	// 	//return view('default.template')->withTitle('Hello Hello');

    		
    		//return view('default.template')->withTitle('Hello Laravel Framework');

    		$array = [

    			'title'=>'Laravel Project',
    			'data'=>[

    				'one'=>'List 1',
    				'two'=>'List 2',
    				'three'=>'List 3',
    				'four'=>'List 4',
    				'five'=>'List 5'

    			],
    			'dataI'=>['List 1','list 2','list 3','list 4','list 5'],
    			'bvar'=>true,
    			'script'=>"<script>alert('Hello</script>"

    		];

    		$view = view('default.index',$array)->render();
    		//echo view('default.template',['title'=>'HEllo World!!!'])->getPath();
    		return $view;
    	}

    	abort(404);
    	
    }
}
