<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;
use dosamigos\editable\Editable;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\modules\in\models\In */
/* @var $form yii\widgets\ActiveForm */
?>

<?php

$script = <<<SKRIPT
  $(document).on('submit', '#new_country', function(event) {
  //var container = $(this).closest('[data-pjax-container]')
  $.pjax.submit(event, '#countries')
})
SKRIPT;

$this->registerJs($script);

?>

<div class="in-form">
  <?php yii\widgets\Pjax::begin(['id' => 'new_country']) ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'license_plate')->textInput(['maxlength' => true]) ?>

    <?= DateTimePicker::widget([
        'model' => $model,
        'attribute' => 'date_time',
        'language' => 'en', 'size' => 'ms',
        'clientOptions' => [ 'autoclose' => true,
        //'format' => 'dd MM yyyy - HH:ii P',
        'todayBtn' => true ] ]);
    ?>
    <br/>
    <?= Editable::widget( [
        'name' => 'license_plate',
        'value' => '',
        'url' => 'site/test',
        'type' => 'select2',
        'mode' => 'pop',
        'clientOptions' => [
                  'pk' => 2, 'placement' => 'right',
                  'select2' => [ 'width' => '124px' ],
                  'source' => [ ['id' => 'gb',
                  'text' => 'Great Britain'],
                  ['id' => 'es', 'text' => 'Spain'],
                  ],
                ]
        ]);?>
    <br/>
    <br/>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php yii\widgets\Pjax::end() ?>

</div>
