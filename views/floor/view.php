<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Floor */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Floors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="floor-view">
    
    <h1>
        <img height="50px" src="<?=\Yii::$app->request->BaseUrl?>/img/floor.png"/>
        <span style="vertical-align: middle;">Floors: <?= Html::encode($this->title) ?></span></h1>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->floorid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->floorid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
        ],
    ]) ?>

</div>
