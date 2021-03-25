<?php


namespace guruarif\guruphp\Exception;

/**
 *
 * Class NotFoundException
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package guruarif\guruphp\Exception;
 */

class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}