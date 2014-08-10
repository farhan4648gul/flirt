<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 8/8/14
 * Time: 11:06 PM
 */
namespace Acme\Services;

use Acme\Validators\CoinsValidator;

class CoinsService {


    /**
     * @var \Acme\Validators\CoinsValidator
     */
    private $validator;

    function __construct(CoinsValidator $validator)
    {
        $this->validator = $validator;
    }
}