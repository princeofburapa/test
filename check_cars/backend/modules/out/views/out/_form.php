<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\modules\out\models\Out */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="out-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'license_plate')->textInput(['maxlength' => true]) ?>

    <?= DateTimePicker::widget([
        'model' => $model,
        'attribute' => 'date_time',
        'language' => 'en', 'size' => 'ms',
        'clientOptions' => [ 'autoclose' => true,
        'format' => 'dd MM yyyy - HH:ii P',
        'todayBtn' => true ] ]);
    ?>
    <br/>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
