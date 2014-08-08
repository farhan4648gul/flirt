<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/8/14
 * Time: 11:11 PM
 */

namespace Acme\Services;
use Acme\Exceptions\ValidationException;
use Acme\Validators\MessagesValidator;

class MessagesService {

    protected $validator;
    public function __construct(MessagesValidator $validator)
    {
        $this->validator = $validator;
    }
} 