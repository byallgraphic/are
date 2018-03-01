<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jornadas */

$this->title = 'Agregar Jornada: ';
$this->params['breadcrumbs'][] = ['label' => 'Jornadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jornadas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
