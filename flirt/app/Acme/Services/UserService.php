<?php namespace Acme\Services;

use Acme\Exceptions\ValidationException;
use Acme\Validators\UserValidator;
use Illuminate\Support\Facades\Hash;

class UserService {

    protected $validator;
    public function __construct(UserValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make($input){

        if($this->validator->isValid($input))
        {
            \User::create(array(
                'firstname' => $input['firstname'],
                'lastname' => $input['lastname'],
                'company' => $input['company'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'status' => true
            ));
        }
        throw new ValidationException("User validation failed!", $this->validator->getErrors());
    }
    public function save($userType, $input){

        if($this->validator->isValid($input))
        {
            $user = new \User;
            $user->fill($input);
            $userType->user()->save($user);
        }
        throw new ValidationException("User validation failed!", $this->validator->getErrors());
    }
    public function check($input){
        if($this->validator->isValidAuth($input)){
            return true;
        }
        throw new ValidationException("User validation failed!", $this->validator->getErrors());
    }

} 