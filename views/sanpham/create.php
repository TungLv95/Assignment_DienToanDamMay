<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;



/* @var $this yii\web\View */
/* @var $model app\models\Sanpham */

$this->title = 'Thêm sản phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$list=ArrayHelper::map($list,'loaisanpham_id','ten');
?>
<div class="sanpham-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'loaisanpham_id')->dropdownList($list) ?>

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'masp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mota')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

