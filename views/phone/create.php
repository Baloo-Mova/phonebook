<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Phones */

$this->title = 'Добавить телефон';
$this->params['breadcrumbs'][] = ['label' => 'Телефоны', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
