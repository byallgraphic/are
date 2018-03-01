<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sedes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sedes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefonos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'id_instituciones' )->dropDownList( $instituciones, [ 'prompt' => 'Seleccione...' ] ) ?>

    <?= $form->field($model, 'latitud')->textInput() ?>

    <?= $form->field($model, 'longitud')->textInput() ?>

    <?= $form->field($model, 'id_zonificaciones')->dropDownList( $zonificaciones, [ 'prompt' => 'Seleccione...' ] ) ?>

    <?= $form->field($model, 'id_tenencias')->dropDownList( $tenencias, [ 'prompt' => 'Seleccione...' ] ) ?>

    <?= $form->field($model, 'id_modalidades')->dropDownList( $modalidades, [ 'prompt' => 'Seleccione...' ] ) ?>

    <?= $form->field($model, 'id_municipios')->textInput() ?>

    <?= $form->field($model, 'id_generos_sedes' )->dropDownList( $generosSedes, [ 'prompt' => 'Seleccione...' ] ) ?>

    <?= $form->field($model, 'id_calendarios' )->dropDownList( $calendarios, [ 'prompt' => 'Seleccione...' ] ) ?>

     <?= $form->field($model, 'id_estratos' )->dropDownList( $estratos, [ 'prompt' => 'Seleccione...' ] ) ?>

	<?= $form->field($model, 'id_barrios_veredas' )->dropDownList( $barriosVeredas, [ 'prompt' => 'Seleccione...' ] ) ?>

    <?= $form->field($model, 'codigo_dane')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sede_principal')->textInput() ?>

    <?= $form->field($model, 'comuna')->textInput() ?>

	<?= $form->field($model, 'estado' )->dropDownList( $estados ) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
