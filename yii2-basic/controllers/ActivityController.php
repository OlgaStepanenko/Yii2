<?php


namespace app\controllers;

use app\base\BaseController;
use app\controllers\actions\ActivityCreatAction;
class ActivityController extends BaseController
{
    public function actions()
    {
        return [
            'create'=>['class'=>ActivityCreatAction::class,'name' => 'Ольга'],
            'new'=>['class'=>ActivityCreatAction::class, 'name' => 'Андрей']
        ];
    }

}