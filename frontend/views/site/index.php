<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'Mail';
?>

<div class="row">
    <div class="col-lg-6 col-6">
        <?=   Html::a('Перейти в форму рассылки', "/mail", ['class' => 'btn btn-primary' ,
            'id'=>'buttonToUpload' , 'style'=>' font-size: 15px;']);?>
    </div>

    <div class="col-lg-6 col-6">
        <?=   Html::a('Перейти в форму добавления пользователей', "/people", ['class' => 'btn btn-primary' ,
            'id'=>'buttonToUpload' , 'style'=>' font-size: 15px;']);?>
    </div>
</div>