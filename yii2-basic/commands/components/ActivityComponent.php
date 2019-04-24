<?php

use yii\base\Componrnt
class ActivityComponent extends Component
{
    public $activity_class;
    public function getModel() {

        return new $this->activity_class;
    }

    public function createActivity(&$model):bool {

        if(!$model->validate()) {
            print_r($model->getErrors());
            return false;
        }

        return true;
    }

}