<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Standard;
use app\models\Aluno;
use app\models\Curso;
/* @var $this yii\web\View */
/* @var $model app\models\Aluno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matricula')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'sexo')->dropDownList(["M" => "Masculino", "F" => "Feminino"] 

                                        ) ?>

     <?= $form->field($model, 'id_curso')->dropDownList(["1" => "Ciência da Computação", "2" => "Sistemas de Informação", "3"=>"Engenharia da Computação"] 

                                        ) ?>

    <!-- <?= $form->field($model, 'id_curso')->textInput() ?> -->

    <?= $form->field($model, 'ano_ingresso')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
