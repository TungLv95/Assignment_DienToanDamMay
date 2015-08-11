<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $sanpham_id
 * @property integer $loaisanpham_id
 * @property string $ten
 * @property string $masp
 * @property string $mota
 *
 * @property Chitiethoadon[] $chitiethoadons
 * @property Loaisanpham $loaisanpham
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loaisanpham_id', 'ten', 'masp', 'mota'], 'required'],
            [['loaisanpham_id'], 'integer'],
            [['ten', 'masp'], 'string', 'max' => 30],
            [['mota'], 'string', 'max' => 90]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sanpham_id' => 'ID',
            'loaisanpham_id' => 'Loại sản phẩm ID',
            'ten' => 'Tên',
            'masp' => 'Mã sản phẩm',
            'mota' => 'Mô tả',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChitiethoadons()
    {
        return $this->hasMany(Chitiethoadon::className(), ['sanpham_id' => 'sanpham_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoaisanpham()
    {
        return $this->hasOne(Loaisanpham::className(), ['loaisanpham_id' => 'loaisanpham_id']);
    }
}
