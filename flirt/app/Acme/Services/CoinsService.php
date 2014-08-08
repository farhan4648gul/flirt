<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/8/14
 * Time: 11:06 PM
 */
namespace Acme\Services;
use Acme\Exceptions\ValidationException;
use Acme\Validators\CoinsValidator;

namespace Acme\Services;


class CoinsService {

    protected $validator;
    public function __construct(CoinsValidator $validator)
    {
        $this->validator = $validator;
    }

} 