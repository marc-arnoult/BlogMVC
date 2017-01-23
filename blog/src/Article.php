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
    public function __construct(string $author,string $title,string $content)
    {
        $this->author  = $author;
        $this->title   = $title;
        $this->content = $content;
    }

    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId(int $id)
    {
        $id = (int) $id;

        if ($id > 0) {
            $this->id = $id;
        }
    }

    /**
     * @return mixed
     */
    public function getAuthor() : string
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor(string $author)
    {
        if (is_string($author)) {
            $this->author = $author;
        }
    }

    /**
     * @return mixed
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle(string $title)
    {
        if (is_string($title)) {
            $this->title = $title;
        }
    }

    /**
     * @return mixed
     */
    public function getContent() : string
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent(string $content)
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