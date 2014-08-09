<?php namespace Acme\Services;

use Acme\Exceptions\ValidationException;
use Acme\Validators\UserValidator;

class UserService {

    protected $validator;
    public function __construct(UserValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make($inputs)
    {
        if($this->validator->isValid($inputs))
        {
            $inputs['status'] = true;
            return \User::create($inputs);
        }
        throw new ValidationException("User validation failed!", $this->validator->getErrors());
    }

    public function check($input)
    {
        if($this->validator->isValidAuth($input)){
            return true;
        }
        throw new ValidationException("User validation failed!", $this->validator->getErrors());
    }

} 