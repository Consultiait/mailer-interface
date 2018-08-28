<?php
/**
 * Created by PhpStorm.
 * User: oskargunther
 * Date: 27.08.2018
 * Time: 12:57
 */

namespace Mailer\Model;


use JMS\Serializer\Annotation as Serializer;

class EmailAddress
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $address;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $name;

    public function __construct($address, $name = '')
    {
        $this->address = $address;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}