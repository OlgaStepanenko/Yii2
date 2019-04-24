<?php


namespace app\models;

use yii\base\Model;

class Activity extends  Model
{
    public  $title;

    public $description;

    public $dste_start;

    public $is_blocked;

    public function rules()
    {
        return [
            ['title', 'required'],
            ['description', 'string', 'min'=>10],
            ['date_start', 'string'],
            ['is_blocked', 'boolean']
        ];
    }

    public  function attributeLabeles()
    {
        return [
            'title'=>'Заголовок события',
            'description'=>'Описание',
            'date_start'=>'Дата начала',
            'is_bloked'=>'Блокирующее событие'
        ];
    }
}