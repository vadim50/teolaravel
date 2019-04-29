<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Core extends Controller
{
    //
    public function __construct(){
    	//$this->middleware('mymiddle');
    }
    public function getArticles(){
    	echo __METHOD__;
    }

    public function getArticle($id){
    	echo __METHOD__;
    	echo '<hr>';
    	echo $id;
    }
}
