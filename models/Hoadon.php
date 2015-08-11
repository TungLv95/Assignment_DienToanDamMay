<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property integer $hoadon_id
 * @property integer $khachhang_id
 * @property string $ngaymua
 *
 * @property Chitiethoadon[] $chitiethoadons
 * @property Khachhang $khachhang
 */
class Hoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['khachhang_id'], 'required'],
            [['khachhang_id'], 'integer'],
            [['ngaymua'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hoadon_id' => 'Hóa đơn ID',
            'khachhang_id' => 'Khách hàng ID',
            'ngaymua' => 'Ngày mua',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChitiethoadons()
    {
        return $this->hasMany(Chitiethoadon::className(), ['hoadon_id' => 'hoadon_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhachhang()
    {
        return $this->hasOne(Khachhang::className(), ['khachhang_id' => 'khachhang_id']);
    }
}
