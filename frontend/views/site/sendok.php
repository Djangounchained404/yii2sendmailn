<?php
use yii\helpers\Html;
?>

<h2>Все сообщения были отправленны пользователям</h2>
<?=   Html::a('Назад', "/mail", ['class' => 'btn btn-primary' ,
    'id'=>'buttonToUpload' , 'style'=>' font-size: 15px;']);?>