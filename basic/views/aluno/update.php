<?php

use yii\helpers\Html;
use app\models\Aluno;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = 'Update Aluno: ' . ' ' . $model->nome;
//$this->title = strtolower($this->title);
//$this->title = ucwords($this->title);
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aluno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>



</div>
