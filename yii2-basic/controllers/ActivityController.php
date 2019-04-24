<?php


namespace app\controllers;

use app\base\BaseController;
use app\model\Activity;
use app\models\Activity;
class ActivityController extends BaseController
{
    public function actions()
    {
        return [
            'create'=>['class'=>ActivityCreateAction::class,'name' => 'Ольга'],
            'new'=>['class'=>ActivityCreateAction::class, 'name' => 'Андрей']
        ];
    }

}