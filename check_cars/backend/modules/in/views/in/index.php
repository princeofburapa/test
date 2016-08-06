<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\in\models\InSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="in-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create In', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <!-- Render create form -->




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'license_plate',
            'date_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php $this->render('_form', [
        'model' => $model,
    ]) ?> 

</div>
