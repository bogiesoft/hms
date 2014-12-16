<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-create">

    <h1>
        <img height="50px" src="<?=\Yii::$app->request->BaseUrl?>/img/customer.png"/>
        <span style="vertical-align: middle;">Customers: <?= Html::encode($this->title) ?></span></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'index' => $index,
        'index1' => $index1,
        'customerPhone' => $customerPhone,
        'customerIdentification' => $customerIdentification,
    ]) ?>

</div>
