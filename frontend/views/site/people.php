<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h2>Добавить пользователей</h2>
<?
$this->title = 'Обратная связь';
?>


    <?php if (Yii::$app->session->getFlash('success')): ?>
        <p>Данные формы записаны в базу данных</p>
    <?php else: ?>
        <p>Данные формы не прошли валидацию</p>
    <?php endif; ?>



 <?php $form = ActiveForm::begin(['id' => 'feedback-form']); ?>
<hr>
        <?= $form->field($model, 'username')->textInput(); ?>
<hr>
        <?= $form->field($model, 'email')->textInput(); ?>
<hr>
    <?= $form->field($model,'confirmed')->dropDownList(Yii::$app->params['boolean'], ['options' => [1 => ['Selected' => true]]]);?>
<hr>


<?

if (is_int($model->validts)){
    $validts_check=date('d.m.Y',$model->validts);
} else {
    $validts_check=$model->validts;
}



?>
<?= $form->field($model, 'validts')->widget(\yii\widgets\MaskedInput::className(),
    [
        'mask' => "99.99.9999",
        'clientOptions' => [
            'alias' => 'date',
//                        'type' => 'text',

        ],
    ]


)->textInput(['maxlength' => true, 'value' => ($model->validts==null) ? ' ' : $validts_check]
);

?>

<hr>






<!--        --><?//= $form->field($model, 'body')->textarea(['rows' => 5]); ?>
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']); ?>
    <?php ActiveForm::end(); ?>

