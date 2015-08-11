<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Hoadon */

$this->title = 'Thêm hóa đơn';
$this->params['breadcrumbs'][] = ['label' => 'Hóa đơn', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$list=ArrayHelper::map($list,'khachhang_id','ten');
?>
<div class="hoadon-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'khachhang_id')->dropdownList($list) ?>

    <?= $form->field($model, 'ngaymua')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
