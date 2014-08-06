<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/6/14
 * Time: 10:01 PM
 */
use Illuminate\Database\Eloquent;
class Visit extends Eloquent {

    protected $table = 'visits';
    protected $fillable = ['user_id','member_id'];
} 