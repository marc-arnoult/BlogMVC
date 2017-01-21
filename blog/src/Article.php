<?php


class Article
{
    private $id;
    private $author;
    private $title;
    private $content;
    private $dateCreation;

    /**
     * @return integer
     */
    public function __construct($author, $title, $content)
    {
        $this->author  = $author;
        $this->title   = $title;
        $this->content = $content;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $id = (int) $id;

        if ($id > 0) {
            $this->id = $id;
        }
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        if (is_string($author)) {
            $this->author = $author;
        }
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->title = $title;
        }
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        if (is_string($content)) {
            $this->content = $content;
        }
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        if (!empty($dateCreation)) {
            $this->dateCreation = $dateCreation;
        }
    }
}