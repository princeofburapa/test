<?php

namespace backend\modules\out\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\out\models\Out;

/**
 * OutSearch represents the model behind the search form about `backend\modules\out\models\Out`.
 */
class OutSearch extends Out
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD:check_cars/backend/modules/out/models/OutSearch.php
            [['id'], 'integer'],
            [['license_plate', 'data_time'], 'safe'],
=======
            [['id', 'status_id'], 'integer'],
            [['license_plate', 'date_time'], 'safe'],
>>>>>>> ebd5be19441c3573c1956f4c3eb06e2a92c406a7:check_cars/backend/modules/data/models/DataSearch.php
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Out::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'data_time' => $this->data_time,
        ]);

        $query->andFilterWhere(['like', 'license_plate', $this->license_plate]);

        return $dataProvider;
    }
}
