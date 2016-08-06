<?php

namespace backend\modules\out\models;

use Yii;

/**
 * This is the model class for table "out".
 *
 * @property integer $id
 * @property string $license_plate
 * @property string $data_time
 */
class Out extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'out';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['license_plate', 'data_time'], 'required'],
            [['data_time'], 'safe'],
            [['license_plate'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสการออก',
            'license_plate' => 'ป้ายทะเบียนรถ',
            'data_time' => 'วันเวลาออก',
        ];
    }
}
