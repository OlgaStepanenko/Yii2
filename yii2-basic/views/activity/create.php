<?php
/**
 * $var $this \yii\veb\View
 * $var $model \app\models\Activity
 */
?>

<div class="row">
    <div class="col-nd-12">
        <h3>Добавление события</h3>
        <p><?=$name;?></p>
        <p><?=Yii::getAlias('@app');?></p>
        <p><?=Yii::getAlias('@webroot');?></p>
        <p><?=Yii::getAlias('@my');?></p>
        <?php $form=\yii\bootstrap\ActiveForm::begin([
]);?>
        <?=$form->field($model, 'title'); ?>
        <?=$form->field($model, 'description')->textarea(['data-attr'=>2]);?>
        <?=$form->field($model, 'date_start')->input('date');?>
        <?=$form->field($model, 'is_blocked')->checkbox();?>

        <div class="form-group">
            <button class="btn-default" type="submit">Создать</button>
        </div>

        <?php $form=\yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>
