<?php


namespace guruarif\guruphp\Exception;

/**
 *
 * Class ForbiddenException
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package guruarif\guruphp\Exception;
 */

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}