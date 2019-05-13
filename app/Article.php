<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	use SoftDeletes;
    //
    //protected $table = 'articles';
    protected $primaryKay = 'id';
    public $incrementing = true;

    public $timestamps = true;
    protected $fillable = ['name','text','img'];
    //protected $quarded = ['text'];
    protected $dates = ['deleted_at'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
