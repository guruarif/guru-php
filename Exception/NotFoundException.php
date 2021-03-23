<?php


namespace App\Core\Exception;

/**
 *
 * Class NotFoundException
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package App\Core\Exception;
 */

class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}