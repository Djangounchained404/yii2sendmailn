<?php

namespace frontend\components;

use yii\base\Component;

class Helpers extends Component
{
    public static function debug ($data)
    {
        echo '<pre>';
        print_r('GHBBBBBB');
        var_dump($data);
        echo '</pre>';
    }
}
