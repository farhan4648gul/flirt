<?php namespace Acme\Exceptions;
use \Exception;

class QueryException extends \Exception{

    protected $errors;
    public function __construct($message, $errors, $code = 0, Exception $previous = null)
    {
        $this->errors = $errors;
        parent::__construct($message, $code, $previous);
    }

    public function getErrors()
    {
        return $this->errors;
    }
} 