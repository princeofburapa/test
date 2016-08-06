<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $model backend\modules\in\models\In */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="in-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <!-- Render create form -->

        <?php
        // $this->render('_form', [
        //     'model' => $model,
        // ]) 
        ?>
<?php Pjax::begin(['id' => 'countries']) ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'license_plate',
            'date_time',
        ],
    ]) ?>
<?php Pjax::end() ?>

</div>
