<?php
namespace app\controllers\actions;

use app\components\ActivityComponent;
use yii\base\Action;

class ActivityCreatAction extends Action
{
    public $name;

    public function run () {

        $model= \Yii::$app->activity->getModel();

        $comp = \Yii::createObject(['class'=>ActivityComponent::class, 'activity_class'=>\app\models\Activity::class]);

        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());

            if($comp->createActivity($model)){

            }
        }

        return $this->controller->render('create', ['model'=>$model, 'name'=>$this->name]);
    }

}