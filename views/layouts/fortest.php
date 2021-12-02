<?php
    use app\assets\TestAsset;
    use yii\helpers\Html;

    TestAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo Html::encode($this->title); ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="container">
        <h1>Тестовый шаблон</h1>
        <?php echo $content; ?>
        <?php $this->endBody() ?>
    </div>
</body>
</html>
<?php $this->endPage() ?>
