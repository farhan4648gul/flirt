<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/6/14
 * Time: 10:23 PM
 */
use Illuminate\Database\Eloquent;

class UserGift extends Eloquent {

    protected $table = 'user_gifts';
    protected $fillable = ['user_id','member_id','gift_id','message','status'];
} 