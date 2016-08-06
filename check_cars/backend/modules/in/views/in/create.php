<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\in\models\In */

$this->title = 'Create In';
$this->params['breadcrumbs'][] = ['label' => 'Ins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="in-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
