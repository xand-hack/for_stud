<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <title><?= $APPLICATION->ShowTitle() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.604825ed.ico" type="image/x-icon">
    <link href="css/common.css" rel="stylesheet">
</head>
<body>
<div id="barba-wrapper">
    <div class="article-list">
        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
            <a class="article-item article-list__item" href="<?= $arItem['DETAIL_PAGE_URL'] ?>" data-anim="anim-3">
                <div class="article-item__background">
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>"/>
                </div>
                <div class="article-item__wrapper">
                    <div class="article-item__title"><?= $arItem['NAME'] ?></div>
                    <div class="article-item__content"><?= $arItem['PREVIEW_TEXT'] ?></div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
