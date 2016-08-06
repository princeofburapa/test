<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model backend\modules\data\models\Data */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'license_plate')->textInput(['maxlength' => true]) ?>

    <!--?= $form->field($model, 'date_time')->textInput() ?-->
    <?php echo DateTimePicker::widget([
      'model' => $model,
        'attribute' => 'date_time',
    'name' => 'datetime_10',
    'options' => ['placeholder' => 'Select operating time ...'],
    //'convertFormat' => true,
    'pluginOptions' => [

        //'format' => 'Y-M-d H:i:s ',
        //'startDate' => '01-Mar-2014 12:00 AM',
        'todayHighlight' => true
    ]
]);?>
    <?= $form->field($model, 'status_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
