<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Paralelos */

$this->title = 'Agregar';
$this->params['breadcrumbs'][] = ['label' => 'Paralelos', 'url' => ['index']];
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
