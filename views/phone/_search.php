<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Phones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
 
    <div class="col-lg-6">
    <?= $form->field($model, 'PhoneNumber')->widget(\yii\widgets\MaskedInput::className(), [
                                                             'mask' => '+38(999)-999-99-99',
                                                    ]) ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'FIO') ?>
    </div>
    <div class="col-lg-6">
    <?= $form->field($model, 'Street') ?>
    </div>
    <div class="col-lg-3">
    <?= $form->field($model, 'HomeNumber')->textInput(['type'=>'number']) ?>
    </div>
    <div class="col-lg-3">
    <?= $form->field($model, 'Flat')->textInput(['type'=>'number']) ?>
    </div>
    
    <div class="form-group text-center">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?> 
    </div>

    <?php ActiveForm::end(); ?>

</div>
