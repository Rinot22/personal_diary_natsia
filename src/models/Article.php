<?php

namespace models;

class Article {
    private $id;
    private $title;
    private $subtitle;
    private $content;

    /**
     * @param $id
     * @param $title
     * @param $content
     */
    public function __construct($id, $title, $subtitle = null, $content = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
}