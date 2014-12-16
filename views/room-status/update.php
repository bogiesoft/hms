<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RoomStatus */

$this->title = 'Update';
$this->params['breadcrumbs'][] = ['label' => 'Room Status', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->roomstatusid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="room-status-update">

    <h1>
        <img height="50px" src="<?=\Yii::$app->request->BaseUrl?>/img/status.png"/>
        <span style="vertical-align: middle;">Room Status: <?= Html::encode($this->title) ?></span></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
