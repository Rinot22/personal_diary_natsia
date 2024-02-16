<?php

namespace repositories;

use models\Article;
use PDO;

require_once __DIR__.'/../models/Article.php';
require_once 'Repository.php';

class ArticleRepository extends Repository {
    public function addArticle($id, $title, $subcontent, $content) {
        $stmt = $this->database->connect()->prepare('
            insert into public.articles (id, title, subcontent, acontent) 
            values (?, ?, ?, ?);
        ');

        $stmt->execute([
            $id,
            $title,
            $subcontent,
            $content
        ]);
    }

    public function deleteArticle($title) {
        $stmt = $this->database->connect()->prepare('
            delete from public.articles 
            where title = :title;
        ');
        $stmt->bindParam('title', $title, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function getArticles() {
        $stmt = $this->database->connect()->prepare('
            select id, title, subcontent from public.articles;
        ');
        $stmt->execute();

        while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $articles[] = array(
                'id' => $res['id'],
                'title' => $res['title'],
                'subcontent' => $res['subcontent']
            );
        }

        $encoded_data = json_encode($articles, JSON_UNESCAPED_UNICODE || JSON_PRETTY_PRINT);
        file_put_contents('public/json/articles.json', $encoded_data);
    }

    public function getArticle($id) {
        $stmt = $this->database->connect()->prepare('
            select id, title, acontent from public.articles 
            where id= :id;
        ');
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $article = $stmt->fetch(PDO::FETCH_ASSOC);

        return new Article(
            $article['id'],
            $article['title'],
            $article['acontent']
        );
    }

    public function getArticleByTitle($title) {
        $stmt = $this->database->connect()->prepare('
            select id, title, subcontent, acontent from public.articles 
            where title = :title;
        ');
        $stmt->bindParam('title', $title, PDO::PARAM_INT);
        $stmt->execute();

        $article = $stmt->fetch(PDO::FETCH_ASSOC);

        return new Article(
            $article['id'],
            $article['title'],
            $article['subcontent'],
            $article['acontent']
        );
    }
}