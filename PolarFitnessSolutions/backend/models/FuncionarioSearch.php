<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Funcionario;

/**
 * FuncionarioSearch represents the model behind the search form of `app\models\Funcionario`.
 */
class FuncionarioSearch extends Funcionario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'status', 'telefone', 'nif', 'cliente_id'], 'integer'],
            [['nome', 'password_hash', 'email', 'auth_key', 'password_reset_token', 'verification_token', 'rua', 'codigo_postal', 'localidade', 'genero'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Funcionario::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'status' => $this->status,
            'telefone' => $this->telefone,
            'nif' => $this->nif,
            'cliente_id' => $this->cliente_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'verification_token', $this->verification_token])
            ->andFilterWhere(['like', 'rua', $this->rua])
            ->andFilterWhere(['like', 'codigo_postal', $this->codigo_postal])
            ->andFilterWhere(['like', 'localidade', $this->localidade])
            ->andFilterWhere(['like', 'genero', $this->genero]);

        return $dataProvider;
    }
}
