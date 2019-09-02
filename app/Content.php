<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table='articles';
    protected $guard=array('id');

    public static $rule=array(
        'subject'=>'required',
        'description'=>'required',
        'picture'=>'required',
        'incharge'=>'required',
        'created_at'=>'required'
    );
    public function getData(){

        return $this->id.':'.$this->subject.':'.$this->description.':'.$this->picture.':'.$this->incharge.':'.$this->created_at;
    }


}
