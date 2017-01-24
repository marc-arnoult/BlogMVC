<?php
namespace Model;
use App\Article;
use \PDO;

class ArticleDAO
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     *
     */
    public function getAllArticle()
    {
        return $this->db->query('SELECT * FROM articles');
    }
    public function addArticle(Article $article)
    {
        $request = $this->db->prepare("INSERT INTO articles (author, title, content, date_creation) VALUES (:author, :title, :content, NOW())");
        $request->bindValue(':title', $article->getTitle(), PDO::PARAM_STR);
        $request->bindValue(':author', $article->getAuthor(), PDO::PARAM_STR);
        $request->bindValue(':content', $article->getContent(), PDO::PARAM_STR);
        $request->execute();
    }
}