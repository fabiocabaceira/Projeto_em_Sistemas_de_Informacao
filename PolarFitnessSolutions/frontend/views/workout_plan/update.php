<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Workout_plan $model */

$this->title = 'Atualizar Plano de Treino: ' . $model->workout_name;
$this->params['breadcrumbs'][] = ['label' => 'Planos de Treino', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->client->user->username . ': ' . $model->workout_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="workout-plan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
