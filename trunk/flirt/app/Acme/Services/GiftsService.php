<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/8/14
 * Time: 11:09 PM
 */

namespace Acme\Services;
use Acme\Exceptions\ValidationException;
use Acme\Validators\GiftsValidator;

class GiftsService {

    protected $validator;
    public function __construct(GiftsValidator $validator)
    {
        $this->validator = $validator;
    }
} 