<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Phones */

$this->title = 'Изменить телефон: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Телефоны', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="phones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
