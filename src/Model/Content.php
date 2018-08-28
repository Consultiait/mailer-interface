<?php
/**
 * Created by PhpStorm.
 * User: oskargunther
 * Date: 27.08.2018
 * Time: 13:00
 */

namespace Mailer\Model;


use JMS\Serializer\Annotation as Serializer;

class Content
{
    const HTML = 'text/html';
    const PLAIN = 'text/plain';

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $type;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $value;

    public function __construct($value, $type)
    {
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}