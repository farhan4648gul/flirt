<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/6/14
 * Time: 9:58 PM
 */
use Illuminate\Database\Eloquent;
class Country extends Eloquent {

    protected $table = 'countries';
    protected $fillable = ['name', 'status'];
} 