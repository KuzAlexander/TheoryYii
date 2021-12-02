<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <?=Html::a('Главная', '/', ['class'=>'nav-link active'])?>
                </li>
                <li class="nav-item">
                    <?php //echo Html::a('Статьи', 'index.php?r=post/index', ['class'=>'nav-link'])?>
                    <?=Html::a('Статьи', \yii\helpers\Url::to(['post/index']), ['class'=>'nav-link'])?>
                </li>
                <li class="nav-item">
                    <?php //echo Html::a('Статья', 'index.php?r=post/show', ['class'=>'nav-link'])?>
                    <?php echo Html::a('Статья', \yii\helpers\Url::to(['post/show']), ['class'=>'nav-link'])?>
                </li>
            </ul>
            <?php
                //debug($this->blocks);
                if(isset($this->blocks['block1'])) {
                    echo $this->blocks['block1'];
                }
            ?>
            <?=$content?>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>