<?php

namespace repositories;

use models\Article;
use models\User;

class ArticleRepository extends Repository {

    /*
        public function article() {
        $articleRepository = new ArticleRepository();
        $articleRepository->getArticles();
        $this->render('article');
        }


*/
    public function getArticle(int $id): ?Article {
        // из таблицы articles берет данные о заголовке и контент и загружает это
        // в article.json

        $stmt = $this->database->connect()->prepare('
            select * from public.articles where id = :id
        ');

        $stmt->bindParam('id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $id=$stmt->fetch(PDO::FETCH_ASSOC);


        if (!$id) return null;

        return new Article(
            $id['content'],
            $id['title'],
        );

    }

    public function getArticles() {
        // из таблицы articles беред данные о заголовке, описании и картинку
        // и загружает это в articles.json



        $stmt = $this->database->connect()->prepare('
            select * from public.articles where id = :id
        ');

        $stmt->bindParam('id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $id=$stmt->fetch(PDO::FETCH_ASSOC);


        if (!$id) return null;

        return new Article(
            $id['title'],
            $id['subcontent'],
            //$id['image']
        );

    }
}