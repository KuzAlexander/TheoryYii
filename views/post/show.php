<?php

//$this->title = 'Одна статья';
use app\components\MyWidget;
?>

<?php $this->beginBlock('block1'); ?>
    <h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>

<h1>Show Action</h1>

<?php //echo MyWidget::widget(['name'=>'User']); ?>

<?php MyWidget::begin()?>
    <p>текст внутри вида show.php</p>
<?php MyWidget::end()?>

<?php MyWidget::begin()?>
    <p>текст внутри вида show.php</p>
<?php MyWidget::end()?>

<?php
    //var_dump($cats);
    //debug($cats[0]);
/*    foreach ($cats as $cat) {
        echo $cat->id . ' '. $cat->title . ' ' . $cat->parent . ' ' . $cat->alias . '<br>';
    }*/
/*    debug($cats);
    echo count($cats[0]->products);
    debug($cats);*/

/*    foreach ($cats as $cat) {
        echo '<ul>';
            echo '<li>' . $cat->title . '</li>';
            $products = $cat->products;
            foreach ($products as $product) {
                echo '<ul>';
                    echo '<li>' . $product->title . '</li>';
                echo '</ul>';
            }
        echo '</ul>';
    }*/
?>

<button class="btn btn-success" id="btn">Click me...</button>

<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']);?>

<?php //$this->registerJs("$('.container').append('<p>Show!</p>')");?>

<?php

$js = <<<JS
    $('#btn').on('click', function(){
        $.ajax({
            url: 'index.php?r=post/index',
            data: {test: '123'},
            type: 'POST',
            success: function(res){
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
JS;

$this->registerJs($js);
