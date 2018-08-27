<?php
/**
 * Created by PhpStorm.
 * User: oskargunther
 * Date: 27.08.2018
 * Time: 13:00
 */

namespace Mailer\Model;


class Content
{
    const HTML = 'text/html';
    const PLAIN = 'text/plain';

    /** @var string */
    private $type;

    /** @var string */
    private $value;


}