<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Loaisanpham */

$this->title = 'Sửa loại sản phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Loại sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaisanpham-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>