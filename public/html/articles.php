<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php foreach ($articles as $article):?>
            <div class="container _article">
                <a href="/article/id=<?= $article->getId();?>">
                    <div class="title"><?= $article->get ?></div>
                    <div class="date"></div>
                </a>
            </div>
        <? endforeach; ?>
    </div>
</body>
</html>