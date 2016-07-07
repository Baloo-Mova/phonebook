<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Phones */

$this->title = $model->FIO;
$this->params['breadcrumbs'][] = ['label' => 'Телефоны', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'PhoneNumber',
            'Street',
            'HomeNumber',
            'Flat',
            'FIO',
        ],
    ]) ?>

</div>
