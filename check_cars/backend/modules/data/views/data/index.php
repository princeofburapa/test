<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\widgets\SwitchInput;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\data\models\DataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เข้า', ['create'], ['class' => 'btn btn-success','value'=> 0]) ?>
        <?= Html::a('ออก', ['create'], ['class' => 'btn btn-danger','value'=> 1]) ?>

    </p>
    <?php echo SwitchInput::widget([
    'name'=>'status_id',
    'pluginOptions'=>[
        'handleWidth'=>60,
        'onText'=>'in',
        'offText'=>'out'
    ]
]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'license_plate',
            'date_time',
            'status_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
