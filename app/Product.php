<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['stock'];
    public function getprix(){
        $prix = $this->prix/1000;

        return number_format($prix, 3, ' ', '') . 'FCFA';
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
