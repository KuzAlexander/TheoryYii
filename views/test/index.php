<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>

<?php
    $this->title = 'Тест';
?>
<h3>Это страница для закрепления материала!</h3>

<?php
//debug($model);
?>
<?php
    $form = ActiveForm::begin();
    echo $form->field($model, 'login');
    echo $form->field($model, 'password')->passwordInput();
    echo $form->field($model, 'tel');
    echo Html::submitButton('Отправить', ['class'=>'btn btn-success']);
    ActiveForm::end();
?>

<?php if(yii::$app->session->hasFlash('success')): ?>
    <?= yii::$app->session->getFlash('success'); ?>
<?php endif; ?>

<?php if(yii::$app->session->hasFlash('error')): ?>
    <?= yii::$app->session->getFlash('error') ?>
<?php endif; ?>

<?php
    //debug($cat);

