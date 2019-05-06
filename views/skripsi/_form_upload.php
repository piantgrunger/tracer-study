<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Skripsi */
/* @var $form yii\widgets\ActiveForm */
use kartik\select2\Select2;
use kartik\date\DatePicker;// The controller action that will render the list
?>

<div class="skripsi-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->errorSummary($model) ?> <!-- ADDED HERE -->
        <div class="row">
        <label class="control-label col-md-3">Proposal</label>
        <div class="col-md-7">
        <?= $form->field($model, 'proposal')->label(false) ?>
        

    </div>
</div>

<div class="row">
        <label class="control-label col-md-3">Kartu Bimbingan </label>
        <div class="col-md-7">
        <?= $form->field($model, 'kartu_bimbingan')->label(false) ?>
        

    </div>
</div>

    </table>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>