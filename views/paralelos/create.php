<?php

/**********
Versión: 001
Fecha: 09-03-2018
Desarrollador: Oscar David Lopez
Descripción: CRUD de Paralelos
---------------------------------------
Modificaciones:
Fecha: 09-03-2018
Persona encargada: Oscar David Lopez
Cambios realizados: - cambio en la miga de pan para que regrese a la lista de la sede que le corresponde
este cambio se hace debido a que se debe pasar por selccionar institucion y sede
Cambios realizados: se agregan las variables que se le pasan a la vista _form
---------------------------------------
**********/

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Paralelos */

$this->title = 'Agregar';
$this->params['breadcrumbs'][] = [
									'label' => 'Paralelos', 
									'url' => [
												'index',
												'idInstitucion' => $idInstitucion, 
												'idSedes' 		=> $idSedes,
											 ]
								 ];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paralelos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'jornadas'=>$jornadas,
		'niveles'=>$niveles,
		'estados'=>$estados,
    ]) ?>

</div>
