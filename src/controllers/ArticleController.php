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
        return $this->render('articles', ['articles' => $articles]);
    }

    public function article($id) {
        $article = $this->repo->getArticle($id);
        return $this->render('article', ['article' => $article]);
    }

    public function add() {
        if (!$this->isPost()) return $this->render('admin');
        $title = $_POST['title'];
        $subcontent = $_POST['subcontent'];
        $content = $_POST['content'];
        $id = time() + (86400 * 30);

        $this->repo->addArticle($id, $title, $subcontent, $content);

        return $this->render('admin', ['messages' => ['Article was added successfully']]);
    }

    public function delete() {
        if (!$this->isPost()) return $this->render('admin');
        $title = $_POST['title'];

        if (!$this->repo->getArticleByTitle($title)) {
            return $this->render('admin', ['messages' => ['Article with this title doesn\'t exist']]);
        }

        $this->repo->deleteArticle($title);

    }
}