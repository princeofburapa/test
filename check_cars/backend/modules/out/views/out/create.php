<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\out\models\Out */

$this->title = 'Create Out';
$this->params['breadcrumbs'][] = ['label' => 'Outs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="out-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
