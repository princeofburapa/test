<?php

namespace backend\modules\in\models;

use Yii;

/**
 * This is the model class for table "in".
 *
 * @property integer $id
 * @property string $license_plate
 * @property string $date_time
 */
class In extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'in';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_time'], 'required'],
            [['date_time'], 'safe'],
            [['license_plate'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสการเข้า',
            'license_plate' => 'ป้ายทะเบียนรถ',
            'date_time' => 'วันเวลาเข้า',
        ];
    }
}
