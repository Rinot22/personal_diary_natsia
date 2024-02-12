<?php

use repositories\ArticleRepository;


require_once 'AppController.php';
require_once __DIR__.'/../repositories/ArticleRepository.php';


class ArticleController extends AppController {
    private $repo;

    public function __construct() {
        parent::__construct();
        $this->repo = new ArticleRepository();
    }

    public function articles() {
        $articles = $this->repo->getArticles();
        $this->render('articles', ['articles' => $articles]);
    }

    public function article(int $id) {
        $article = $this->repo->getArticle($id);
        $this->render('article', ['article' => $article]);
    }
}