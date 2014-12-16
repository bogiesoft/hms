<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FloorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Floors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="floor-index">

    <h1>
        <img height="50px" src="<?=\Yii::$app->request->BaseUrl?>/img/floor.png"/>
        <span style="vertical-align: middle;"><?= Html::encode($this->title) ?></span></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Floor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['style'=>'width: 70px;']
            ],

            'name',

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions'=>['style'=>'width: 100px;']
            ],
        ],
    ]); ?>

</div>
