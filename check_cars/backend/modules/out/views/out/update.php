<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\out\models\Out */

<<<<<<< HEAD:check_cars/backend/modules/out/views/out/update.php
$this->title = 'Update Out: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Outs', 'url' => ['index']];
=======
$this->title = 'Update Data: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Datas', 'url' => ['index']];
>>>>>>> ebd5be19441c3573c1956f4c3eb06e2a92c406a7:check_cars/backend/modules/data/views/data/update.php
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="out-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
