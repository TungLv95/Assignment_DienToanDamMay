<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Thêm sản phẩm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'sanpham_id',
            'loaisanpham_id',
            'ten',
            'masp',
            'mota',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
