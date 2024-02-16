<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Articles</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/articles-style.css">
</head>

<body>
    <?php $this->render('navbar') ?>
    <div id="root">
        <div id="article-panel">
            <div class="article">
                <div class="image-panel">
                    <img class="large" src="/public/img/articles/article_250x150.jpg" alt="article image large">
                    <img class="small" src="/public/img/articles/article_150x150.jpg" alt="article image small">
                </div>
                <a class="article-link">
                    <span class="info-panel">
                    <div class="title">Some title</div>
                    <img class="mobile" src="/public/img/articles/article_450x200.jpg" alt="">
                    <div class="subcontent">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </span>
                </a>
            </div>
        </div>
    </div>

    <script src="/public/js/articles.js"></script>
</body>

</html>