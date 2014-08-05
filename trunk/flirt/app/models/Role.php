<?php

class Role extends Eloquent {

    protected $table = 'roles';
    protected $fillable = ['name', 'status'];
    protected static $rules = [
        'name' => 'required|max:20',
        'status' => 'required|digits_between:0,9',
    ];

    public function users() {
        return $this->hasMany('User');
    }

}
