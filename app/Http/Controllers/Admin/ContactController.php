<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //
    // protected $request;
    // public function __construct(Request $request){
    // 	$this->request = $request;
    // }
    public function show(Request $request, $id=false){
    	//print_r($request->all());
    	//$array = $request->only('site','text');
    	// $array = $request->except('site','text');
    	// print_r($array);

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
    	//print_r($request->segments());
    	//if($request->isMethod('post')){

    		//validation
    		// $request->flash();
    		// $request->flashOnly('name','site');
    		//$request->flashExcept('name','site');
    		//return redirect()->route('contact')->withInput();
    		//echo '<h1 style="margin-top:50px;">'.$request->method().'</h1>';
    	//}

        if($request->isMethod('post')){

            //$rules = [
                //'name'=>'between:2,5'
                //'name'=>'confirmed'
                //'name'=>'different:email'
                //'name'=>'digits:2'

                //'name'=>'same:email',

                //'name'=>'array',
                //'name'=>'required|max:10',
                //'name'=>'after:tomorrow',
                //'email'=>'required|email'
                //======== HAS ALREADY BEEN TAKEN =======
                //'name'=>'unique:users,name',

            //];

            //$this->validate($request,$rules);

            //dump($request->all());
        }

    	return view('default.contact')->withTitle('Contacts');
    }
}
