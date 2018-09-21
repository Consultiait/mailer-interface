<?php
/**
 * Created by PhpStorm.
 * User: oskargunther
 * Date: 21.09.2018
 * Time: 12:29
 */

namespace Mailer\MailerBundle\Provider;


use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use Mailer\Model\Message;
use OldSound\RabbitMqBundle\RabbitMq\ProducerInterface;

class MailerProvider
{
    /** @var ProducerInterface */
    private $producer;

    /** @var Serializer */
    private $serializer;

    public function __construct(ProducerInterface $producer, Serializer $serializer)
    {
        $this->producer = $producer;
        $this->serializer = $serializer;
    }

    public function send(Message $message)
    {
        $context = new SerializationContext();
        $context->setSerializeNull(true);

        $this->producer->publish($this->serializer->serialize($message, 'json', $context));
    }
}