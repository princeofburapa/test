<?php

namespace backend\modules\status\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $in
 * @property string $our
 *
 * @property Data[] $datas
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'in', 'our'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสสถานะ',
            'in' => 'การเข้า',
            'our' => 'การออก',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatas()
    {
        return $this->hasMany(Data::className(), ['status_id' => 'id']);
    }
}
