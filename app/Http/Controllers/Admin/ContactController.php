<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    // protected $request;
    // public function __construct(Request $request){
    // 	$this->request = $request;
    // }
    public function show(Request $request, $id=10){
    	//print_r($request->all());
    	//$array = $request->only('site','text');
    	$array = $request->except('site','text');
    	print_r($array);

    	// if($request->has('name')){
    	// 	echo '<h1 style="margin-top:50px;">'.$request->input('name','default').'</h1>';
    	// }
    	// echo '<h1 style="margin-top:50px;">'.$request->name.'</h1>';
    	// echo '<h1 style="margin-top:50px;">'.$request->path().'</h1>';

   //  	if($request->is('contact/*')){
			// echo '<h1 style="margin-top:50px;">'.$request->path().'</h1>';    		
   //  	}

    	// echo '<h1 style="margin-top:50px;">'.$request->url().'</h1>';
    	// echo '<h1 style="margin-top:50px;">'.$request->fullUrl().'</h1>';
    	//echo '<h1 style="margin-top:50px;">'.$request->method().'</h1>';
    	//echo '<h1 style="margin-top:50px;">'.$request->root().'</h1>';
    	//echo '<h1 style="margin-top:50px;">'.$request->query('option').'</h1>';
    	//print_r($request->header());
    	// print_r($request->server());
    	print_r($request->segments());
    	if($request->isMethod('post')){

    		//validation
    		// $request->flash();
    		// $request->flashOnly('name','site');
    		//$request->flashExcept('name','site');
    		//return redirect()->route('contact')->withInput();
    		//echo '<h1 style="margin-top:50px;">'.$request->method().'</h1>';
    	}

    	return view('default.contact')->withTitle('Contacts');
    }
}
