<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Phones as PhonesModel;

/**
 * Phones represents the model behind the search form about `app\models\Phones`.
 */
class Phones extends PhonesModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'HomeNumber', 'Flat'], 'integer'],
            [['PhoneNumber', 'Street', 'FIO'], 'safe'],
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
        $query = PhonesModel::find();

        // add conditions that should always apply here

        
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 10],
        ]);

        $this->load($params);
         
      
        if (!$this->validate() || !isset($params['Phones']) || $this->isClearQuery($params['Phones'])) {
            // uncomment the following line if you do not want to return any records when validation fails
            $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id' => $this->Id,
            'HomeNumber' => $this->HomeNumber,
            'Flat' => $this->Flat,
        ]);

        $query->andFilterWhere(['like', 'PhoneNumber', $this->PhoneNumber])
            ->andFilterWhere(['like', 'Street', $this->Street])
            ->andFilterWhere(['like', 'FIO', $this->FIO]);

        return $dataProvider;
    }
    
    private function isClearQuery($array){
        $result = true;
            foreach ($array as $key=>$value){
                if(!empty($value)){
                    $result = FALSE;
                }
            } 
        return $result;
    }
}
