<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Discount */
\yii\web\jQueryAsset::register($this);

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Discounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<section class="content-header">
  <h1><?= Html::encode($this->title) ?></h1>
  <?= yii\widgets\Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
  ]) ?>
</section>

<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <?= Html::a('Update', ['update', 'id' => $model->discountid], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->discountid], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </div>
        <div class="box-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'name',
                    [
                        'attribute' => 'rateFormat',
                        'value'  => $model->getRateFormat()
                    ],
                    'fromDateFormat',
                    'toDateFormat',
                ],
            ]) ?>
        </div>
    </div>
</section>