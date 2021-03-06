<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Khách hàng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khachhang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Thêm khách hàng', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'khachhang_id',
            'ten',
            'email:email',
            'phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
