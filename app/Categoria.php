<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    /**
     * Quais campos pode preencher em atribuição em massa
     */
    protected $fillable = ['nome'];

    /**
     * Indica se o modelo usa ou nao os campos de timestamp automaticos
     * do laravel
     */
    public $timestamps = false;

    public function posts()
    {
        # code...
        return $this->hasMany('App\Post');
    }

}
