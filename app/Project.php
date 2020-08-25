<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $guarded=[];
    public function user(){
        return $this->belongTo(User::class);
    }


    public function getPostImageAttribute($value){//Se utiliza si los datos estan ubicados en otro dominio
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
     
        return asset('storage/' . $value);
    }
    public function getPostSecondImageAttribute($value){//Se utiliza si los datos estan ubicados en otro dominio
        if($value!=null){
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
     
        return asset('storage/' . $value);
    }
    }

}
