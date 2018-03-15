<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VinculacionDocentes */

$this->title = 'Agregar vinculación para el docente:';
$this->params['breadcrumbs'][] = ['label' => 'Vinculacion Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vinculacion-docentes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' 			=> $model,
		'estados' 			=> $estados,
		'personas' 			=> $personas,
		'tiposContratos' 	=> $tiposContratos,
    ]) ?>

</div>
