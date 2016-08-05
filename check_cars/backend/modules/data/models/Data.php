<?php

namespace backend\modules\data\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property integer $id
 * @property string $license_plate
 * @property string $date_time
 * @property integer $status_id
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['license_plate', 'date_time', 'status_id'], 'required'],
            [['date_time'], 'safe'],
            [['status_id'], 'integer'],
            [['license_plate'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสข้อมูลการเข้าออก',
            'license_plate' => 'ป้ายทะเบียนรถ',
            'date_time' => 'วันเวลา',
            'status_id' => 'Status ID',
        ];
    }
}
