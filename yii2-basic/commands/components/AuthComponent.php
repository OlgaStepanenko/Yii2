<?php

namespace  app\components;

use app\models\User;
use yii\base\Component;
class AuthComponent extends Component
{
    public function getModel() {
        return new User();
    }

}