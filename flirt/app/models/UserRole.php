<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/6/14
 * Time: 9:54 PM
 */
use Illuminate\Database\Eloquent;

class UserRole extends Eloquent{

    protected $table = 'user_roles';
    protected $fillable = ['user_id','role_id'];
} 