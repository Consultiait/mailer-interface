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

    /**
     * @param EmailAddress $from
     */
    public function setFrom(EmailAddress $from)
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

    public function addTo(EmailAddress $emailAddress)
    {
        $this->to[] = $emailAddress;
    }

    public function addBcc(EmailAddress $emailAddress)
    {
        $this->bcc[] = $emailAddress;
    }

    public function addCc(EmailAddress $emailAddress)
    {
        $this->cc[] = $emailAddress;
    }

    public function addAttachment(Attachment $attachment)
    {
        $this->attachments[] = $attachment;
    }
}