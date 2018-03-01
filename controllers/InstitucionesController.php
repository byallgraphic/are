<?php

namespace app\controllers;

use Yii;
use app\models\Instituciones;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;



use app\models\Estados;
use app\models\Sectores;
use app\models\TiposInstituciones;
use yii\helpers\ArrayHelper;

/**
 * InstitucionesController implements the CRUD actions for Instituciones model.
 */
class InstitucionesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Instituciones models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Instituciones::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Instituciones model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Instituciones model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		
		$estadosTable 		 	= new Estados();
		$dataEstados		 	= $estadosTable->find()->where( 'id=1' )->all();
		$estados	 	 	 	= ArrayHelper::map( $dataEstados, 'id', 'descripcion' );
		
		$sectoresTable 		 	= new Sectores();
		$dataSectores		 	= $sectoresTable->find()->all();
		$sectores	 	 	 	= ArrayHelper::map( $dataSectores, 'id', 'descripcion' );
		
		$tipoInstitucionesTable = new TiposInstituciones();
		$dataTipoInstituciones	= $tipoInstitucionesTable->find()->all();
		$tipoInstituciones	 	= ArrayHelper::map( $dataTipoInstituciones, 'id', 'descripcion' );
		
		
		
        $model = new Instituciones();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' 			=> $model,
            'estados' 			=> $estados,
            'sectores' 			=> $sectores,
            'tipoInstituciones' => $tipoInstituciones,
        ]);
    }

    /**
     * Updates an existing Instituciones model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
		
		$estadosTable 		 	= new Estados();
		$dataEstados		 	= $estadosTable->find()->all();
		$estados	 	 	 	= ArrayHelper::map( $dataEstados, 'id', 'descripcion' );
		
		$sectoresTable 		 	= new Sectores();
		$dataSectores		 	= $sectoresTable->find()->all();
		$sectores	 	 	 	= ArrayHelper::map( $dataSectores, 'id', 'descripcion' );
		
		$tipoInstitucionesTable = new TiposInstituciones();
		$dataTipoInstituciones	= $tipoInstitucionesTable->find()->all();
		$tipoInstituciones	 	= ArrayHelper::map( $dataTipoInstituciones, 'id', 'descripcion' );
		
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'estados' 			=> $estados,
            'sectores' 			=> $sectores,
            'tipoInstituciones' => $tipoInstituciones,
        ]);
    }

    /**
     * Deletes an existing Instituciones model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        // $this->findModel($id)->delete();
        $model = Instituciones::findOne($id);
		$model->estado = 2;
		$model->update(false);

        return $this->redirect(['index']);
    }

    /**
     * Finds the Instituciones model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Instituciones the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Instituciones::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
