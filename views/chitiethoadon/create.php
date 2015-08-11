<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Chitiethoadon */

$this->title = 'Create Chitiethoadon';
$this->params['breadcrumbs'][] = ['label' => 'Chitiethoadons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$list2=ArrayHelper::map($list2,'hoadon_id','hoadon_id');
$list1=ArrayHelper::map($list1,'sanpham_id','ten');
?>
<div class="chitiethoadon-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'sanpham_id')->dropdownList($list1) ?>

    <?= $form->field($model, 'hoadon_id')->dropdownList($list2) ?>

    <?= $form->field($model, 'soluongmua')->textInput() ?>

    <?= $form->field($model, 'khuyenmai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baohanh')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
