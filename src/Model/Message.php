<?php
/**
 * Created by PhpStorm.
 * User: oskargunther
 * Date: 24.08.2018
 * Time: 14:43
 */

namespace Mailer\Model;


class Message
{
    /** @var EmailAddress[] */
    private $to;

    /** @var EmailAddress[] */
    private $bcc;

    /** @var EmailAddress[] */
    private $cc;

    /** @var string */
    private $subject;

    /** @var EmailAddress */
    private $from;

    /** @var Attachment[] */
    private $attachments;

    /** @var string[]|string */
    private $tags;

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
     * @param EmailAddress[] $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return EmailAddress[]
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * @param EmailAddress[] $bcc
     */
    public function setBcc($bcc)
    {
        $this->bcc = $bcc;
    }

    /**
     * @return EmailAddress[]
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param EmailAddress[] $cc
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
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

    /**
     * @param EmailAddress $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return Attachment[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param Attachment[] $attachments
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }

    /**
     * @return string|string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string|string[] $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

}