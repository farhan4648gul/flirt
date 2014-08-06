<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/6/14
 * Time: 10:03 PM
 */
use Illuminate\Database\Eloquent;

class BlockedUser extends Eloquent{

    protected $table = 'blocked_users';
    protected $fillable = ['user_id', 'member_id'];
} 