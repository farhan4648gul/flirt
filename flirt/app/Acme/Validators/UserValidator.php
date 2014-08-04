<?php namespace Acme\Validators;


class UserValidator extends Validator{

    protected static $rules = array(
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
        'firstname' => 'required',
        'lastname' => 'required'
    );

    protected static $authRules = array(
        'email' => 'required|email',
        'password' => 'required'
    );
} 