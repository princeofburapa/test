<?php

namespace backend\modules\data\models;
use backend\modules\status\models\Status;
use Yii;

/**
 * This is the model class for table "data".
 *
 * @property integer $id
 * @property string $license plate
 * @property string $date_time
 * @property integer $status_id
 *
 * @property Status $status
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
            [['license plate', 'date_time', 'status_id'], 'required'],
            [['date_time'], 'safe'],
            [['status_id'], 'integer'],
            [['license plate'], 'string', 'max' => 45],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสข้อมูลการเข้าออก',
            'license plate' => 'ป้ายทะเบียนรถ',
            'date_time' => 'วันเวลา',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }
}
