<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use mihaildev\ckeditor\CKEditor;
?>

<h2>Это первый пост</h2>
<?php
    //debug($names);
    //debug($model);
?>


<?php if(yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= yii::$app->session->getFlash('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if(yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= yii::$app->session->getFlash('error') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options'=>['id'=>'testForm']]) ?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'email')->input('email')?>
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
<?php
    echo $form->field($model, 'text')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);
?>
<?php //echo $form->field($model, 'text')->textarea(['rows'=>5])?>
<?= Html::submitButton('Отправить', ['class'=>'btn btn-success'])?>
<?php ActiveForm::end() ?>

<?php
    //debug($post);
?>
