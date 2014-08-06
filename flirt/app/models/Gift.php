<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/6/14
 * Time: 10:21 PM
 */
use Illuminate\Database\Eloquent;

class Gift extends Eloquent {

    protected $table = 'gifts';
    protected $fillable = ['name','file_name','price','status'];
} 