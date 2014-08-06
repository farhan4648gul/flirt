<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/6/14
 * Time: 9:56 PM
 */
use Illuminate\Database\Eloquent;
class City extends Eloquent{

    protected $table = 'cities';
    protected $fillable = ['country_id','name','zip','status'];
} 