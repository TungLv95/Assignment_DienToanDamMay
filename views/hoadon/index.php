<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hóa đơn';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoadon-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Thêm hóa đơn', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'hoadon_id',
            'khachhang_id',
            'ngaymua',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
