<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/6/14
 * Time: 10:02 PM
 */
use Illuminate\Database\Eloquent;

class FavouriteUser extends Eloquent {

    protected $table = 'favourite_users';
    protected $fillable = ['user_id','member_id'];
} 