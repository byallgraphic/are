<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


use app\models\BarriosVeredas;
use app\models\Calendarios;
use app\models\Estados;
use app\models\Estratos;
use app\models\GenerosSedes;
use app\models\Instituciones;
use app\models\Modalidades;
use app\models\Tenencias;
use app\models\Zonificaciones;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Sedes */

$this->title = $model->id." - ".$model->descripcion;
$this->params['breadcrumbs'][] = ['label' => 'Sedes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sedes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Inactivar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estas seguro que quieres eliminar la sede '.$model->descripcion.'?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'descripcion',
            'telefonos',
            'direccion',
            'area',
			[
				'attribute' => 'id_instituciones',
				'value' => function( $model ){
					$instituciones = Instituciones::findOne($model->id_instituciones);
					return $instituciones ? $instituciones->descripcion : '';
				},
				'filter' => ArrayHelper::map(Instituciones::find()->all(), 'id', 'descripcion' ),
			],
            'latitud',
            'longitud',
			[
				'attribute' => 'id_zonificaciones',
				'value' => function( $model ){
					$zonificaciones = Zonificaciones::findOne($model->id_zonificaciones);
					return $zonificaciones ? $zonificaciones->descripcion : '';
				},
				'filter' => ArrayHelper::map(Zonificaciones::find()->all(), 'id', 'descripcion' ),
			],
			[
				'attribute' => 'id_tenencias',
				'value' => function( $model ){
					$tenencias = Tenencias::findOne($model->id_tenencias);
					return $tenencias ? $tenencias->descripcion : '';
				},
				'filter' => ArrayHelper::map(Tenencias::find()->all(), 'id', 'descripcion' ),
			],
			[
				'attribute' => 'id_modalidades',
				'value' => function( $model ){
					$modalidades = Modalidades::findOne($model->id_modalidades);
					return $modalidades ? $modalidades->descripcion: '';
				},
				'filter' => ArrayHelper::map(Modalidades::find()->all(), 'id', 'descripcion' ),
			],
            'id_municipios',
			[
				'attribute' => 'id_generos_sedes',
				'value' => function( $model ){
					$generosSedes = GenerosSedes::findOne($model->id_generos_sedes);
					return $generosSedes ? $generosSedes->descripcion: '';
				},
				'filter' => ArrayHelper::map(GenerosSedes::find()->all(), 'id', 'descripcion' ),
			],
			[
				'attribute' => 'id_calendarios',
				'value' => function( $model ){
					$calendarios = Calendarios::findOne($model->id_calendarios);
					return $calendarios ? $calendarios->descripcion : '';
				},
				'filter' => ArrayHelper::map(Calendarios::find()->all(), 'id', 'descripcion' ),
			],
			[
				'attribute' => 'id_estratos',
				'value' => function( $model ){
					$estratos = Estratos::findOne($model->id_estratos);
					return $estratos ? $estratos->descripcion : '';
				},
				'filter' => ArrayHelper::map(Estratos::find()->all(), 'id', 'descripcion' ),
			],
			[
				'attribute' => 'id_barrios_veredas',
				'value' => function( $model ){
					$barriosVeredas = BarriosVeredas::findOne($model->id_barrios_veredas );
					return $barriosVeredas ? $barriosVeredas->descripcion : '';
				},
				'filter' => ArrayHelper::map(BarriosVeredas::find()->all(), 'id', 'descripcion' ),
			],
            'codigo_dane',
            'sede_principal',
            'comuna',
			[
				'attribute' => 'estado',
				'value' => function( $model ){
					$estados = Estados::findOne( $model->estado );
					return $estados ? $estados->descripcion : '';
				},
				'filter' => ArrayHelper::map(Estados::find()->all(), 'id', 'descripcion' ),
			],
        ],
    ]) ?>

</div>
