<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/6/14
 * Time: 10:20 PM
 */
use Illuminate\Database\Eloquent;

class UserFriend extends Eloquent {

    protected $table = 'user_friends';
    protected $fillable = ['user_id','member_id','date','status'];
} 