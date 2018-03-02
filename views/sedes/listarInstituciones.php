<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


use app\models\Instituciones;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'INSTITUCIONES';
$this->params['breadcrumbs'][] = $this->title;



$institucionesTable	 = new Instituciones();
$dataInstituciones	 = $institucionesTable->find()->orderby('descripcion')->where('estado=1')->all();
$instituciones		 = ArrayHelper::map( $dataInstituciones, 'id', 'descripcion' );

?>
<div class="sedes-index">

    <h1><?= Html::encode($this->title) ?></h1>
	
	<?php $form = ActiveForm::begin([
		'action' => 'index.php?r=sedes/index', 
		'method' => 'post',
	]); ?>
	
	<?= $form->field($institucionesTable, 'id')->dropDownList( $instituciones, [ 'prompt' => 'Seleccione...', 'id'=>'id_instituciones' ] ) ?>
	
	 <div class="form-group">
		<?= Html::submitButton('Ver Sedes', ['class' => 'btn btn-success']) ?>
    </div>
	
	<?php $form = ActiveForm::end(); ?>
	
</div>