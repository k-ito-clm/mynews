<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
     // Newsモデルに関連付けを行う
    public function pfhistories()
    {
      return $this->hasMany('App\Pfhistory');

    }
    
}