<?php



namespace frontend\components;

use frontend\models\UploadModelsUsers;
use yii\helpers\Html;
use Yii;
use yii\base\Component;
use yii\httpclient\Client;
use yii\helpers\ArrayHelper;


class Common extends Component
{


    public static function sendMail(
        $subject,
        $text,
        $emailFrom = 'worktestmail111@yandex.ru',
        $nameFrom = 'Администрация портала'
    )
    {
        try{
            if
            (
            Yii::$app->mailer->compose()
                ->setFrom(['worktestmail111@yandex.ru' => 'Администрация портала'])
                ->setTo([$emailFrom => $nameFrom])
                ->setSubject($subject)
                ->setHtmlBody($text)
                ->send()
            ) {
                echo Yii::$app->session->setFlash('success', 'Сообщение отправлено!');
                return true;
            }
        } catch(\Swift_TransportException $e){
            echo Yii::$app->session->setFlash('error', 'Ошибка доставки почты - Swift_TransportException');
        }
        catch(yii\base\ErrorException $e){
            echo Yii::$app->session->setFlash('error', 'Ошибка доставки почты - ErrorException');
        }


    }



    public static function goBackUnlogin () {




        $userEmail ="n.musikhin134@yandex.ru";


        $text_body= '<h3>'.'Здравствуйте!'.'</h3>';

        Common::sendMail('Регистрация в личном кабинете "Дизайн-проект квартир"', $text_body, "n.musikhin134@yandex.ru", NULL);

//            Yii::$app->user->logout();
//            return 123;



    }








//    public static function goBackUnlogin1() {
//        Common::goBackUnlogin();

//        $userEmail =Yii::$app->user->identity->email;
//        $model = UploadModelsUsers::find()
//        ->select(['email'])
//            ->from('users')
//            ->where(['id' => '33'])
//            ->limit(1)
//            ->all();


//
//
//        $userEmail ='N.Musikhin134@yandex.ru';
//
//        $text_body= '<h3>'.'your subscription is expiring soon'.'</h3>';
//
//        Common::sendMail('Администрация портала', $text_body, $userEmail, NULL);
//
//
//    }

}