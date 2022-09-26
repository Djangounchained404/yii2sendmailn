<?php


use frontend\components\Common;
use yii\helpers\Html;
?>

<h2>Рассылка писем</h2>


<?=  Html::a('Отправить всем уведомление (за 3 дня)', '/getmail',
    ['class' => 'btn btn-primary btn-lk-common btn-sm btn-block',
        'id'=>'send_btn',
        'style' => ['margin-bottom'=>'15px' ],

    ]);  ?>


<?=   Html::a('Назад', "/", ['class' => 'btn btn-primary' ,
    'id'=>'buttonToUpload' , 'style'=>' font-size: 15px;']);?>