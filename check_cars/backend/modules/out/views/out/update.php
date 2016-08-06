<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\out\models\Out */

$this->title = 'Update Out: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Outs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="out-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
