<?php
/**
 * Created by PhpStorm.
 * User: oskargunther
 * Date: 27.08.2018
 * Time: 12:59
 */

namespace Mailer\Model;


class Attachment
{
    /** @var $content string */
    private $content;

    /** @var $type string */
    private $type;

    /** @var $filename string */
    private $filename;

    /** @var $disposition string */
    private $disposition;

    /** @var $content_id string */
    private $content_id;

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
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
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return string
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * @param string $disposition
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
    }

    /**
     * @return string
     */
    public function getContentId()
    {
        return $this->content_id;
    }

    /**
     * @param string $content_id
     */
    public function setContentId($content_id)
    {
        $this->content_id = $content_id;
    }

}