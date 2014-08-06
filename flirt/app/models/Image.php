<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/6/14
 * Time: 9:59 PM
 */
use Illuminate\Database\Eloquent;
class Image extends Eloquent {

    protected $table = 'images';
    protected $fillable = ['user_id','name','status'];
} 