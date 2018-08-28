<?php
/**
 * Created by PhpStorm.
 * User: oskargunther
 * Date: 24.08.2018
 * Time: 14:43
 */

namespace Mailer\Model;


use JMS\Serializer\Annotation as Serializer;

class Message
{
    /**
     * @var EmailAddress[]
     * @Serializer\Type("array<Mailer\Model\EmailAddress>")
     */
    private $to;

    /**
     * @var EmailAddress[]
     * @Serializer\Type("array<Mailer\Model\EmailAddress>")
     */
    private $bcc;

    /**
     * @var EmailAddress[]
     * @Serializer\Type("array<Mailer\Model\EmailAddress>")
     */
    private $cc;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $subject;

    /**
     * @Serializer\Type("Mailer\Model\EmailAddress")
     */
    private $from;

    /**
     * @var Attachment[]
     * @Serializer\Type("array<Mailer\Model\Attachment>")
     */
    private $attachments;

    /**
     * @var string[]
     * @Serializer\Type("array<string>")
     */
    private $tags;

    /**
     * @var Content[]
     * @Serializer\Type("array<Mailer\Model\Content>")
     */
    private $contents;

    /**
     * Message constructor.
     * @param EmailAddress[] $to
     * @param EmailAddress[] $bcc
     * @param EmailAddress[] $cc
     * @param string $subject
     * @param EmailAddress $from
     * @param Attachment[] $attachments
     */
    public function __construct(
        array $to = [],
        array $bcc = [],
        array $cc = [],
        $subject = '',
        EmailAddress $from = null,
        array $attachments = []
    )
    {
        $this->to = $to;
        $this->bcc = $bcc;
        $this->cc = $cc;
        $this->subject = $subject;
        $this->from = $from;
        $this->attachments = $attachments;
    }


    /**
     * @return EmailAddress[]
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @return EmailAddress[]
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * @return EmailAddress[]
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return EmailAddress
     */
    public function getFrom()
    {
        return $this->from;
    }

    public function setFrom($address, $name = '')
    {
        $this->to[] = new EmailAddress($address, $name);
    }

    /**
     * @return Attachment[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @return string|string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    public function addTag($tag)
    {
        $this->tags[] = $tag;
    }

    public function addTo($address, $name = '')
    {
        $this->to[] = new EmailAddress($address, $name);
    }

    public function addBcc($address, $name = '')
    {
        $this->to[] = new EmailAddress($address, $name);
    }

    public function addCc($address, $name = '')
    {
        $this->to[] = new EmailAddress($address, $name);
    }

    public function addAttachment(Attachment $attachment)
    {
        $this->attachments[] = $attachment;
    }

    public function getContents()
    {
        return $this->contents;
    }

    public function addContent($value, $type)
    {
        $this->contents[] = new Content($value, $type);
    }
}