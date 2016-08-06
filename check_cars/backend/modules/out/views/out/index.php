<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\widgets\SwitchInput;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\out\models\OutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Outs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="out-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
<<<<<<< HEAD:check_cars/backend/modules/data/views/data/index.php
        <?= Html::a('เข้า', ['create'], ['class' => 'btn btn-success','value'=> 0]) ?>
        <?= Html::a('ออก', ['create'], ['class' => 'btn btn-danger','value'=> 1]) ?>

=======
        <?= Html::a('Create Out', ['create'], ['class' => 'btn btn-success']) ?>
>>>>>>> b395dcd538f030d907fd6a56bfc86e733f028746:check_cars/backend/modules/out/views/out/index.php
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
            'data_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
