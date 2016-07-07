<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Phones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PhoneNumber')->widget(\yii\widgets\MaskedInput::className(), [
                                                             'mask' => '+38(999)-999-99-99',
                                                    ]) ?>  

    <?= $form->field($model, 'Street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HomeNumber')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'Flat')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'FIO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
