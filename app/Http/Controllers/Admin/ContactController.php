<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //
    // protected $request;
    // public function __construct(Request $request){
    // 	$this->request = $request;
    // }
    public function store(Request $request, $id=false){
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

            $messages = [

                'name.required' => 'ПОЛЕ-- :attribute обязательно к заполнению!',
            'email.max'=> 'Максмальная-- длина поля :attribute :max символов!',
            'site.required'=>'ПОЛЕ-- :attribute обязательно к заполнению!',


            ];

            $validator = Validator::make($request->all(),[

                'name'=>'required',
                //'email'=>'sometimes|required',//если есть такое поле
                //'email'=>'required'

            ],$messages);

            $validator->sometimes(['email','site'],'required',function($input){
                //dd($input);
                return strlen($input->name) >= 10;
            });

            // $validator->after(function($validator){
            //     $validator->errors()->add('name','Доп');
            // });

            if($validator->fails()){
                //return redirect()->route('contact')->withErrors($validator)->withInput();
                $messages = $validator->errors();
                //dump($messages->all());
                //dump($messages->first('name'));
                // if($messages->has('email')){
                //     //dump($messages->get('email'));
                //     //dump($messages->all('<p> :message </p>'));
                //     dump($messages->first('name','<p> :message </p>'));
                // }
                dd($validator->failed());

                return redirect()->route('contact')->withErrors($validator)->withInput();
                
            }


        }

        //$this->validate($request,$rules,$messages);

    	return view('default.contact')->withTitle('Contacts');
    }

    public function show(){
        return view('default.contact')->withTitle('Contacts');
    }
}
