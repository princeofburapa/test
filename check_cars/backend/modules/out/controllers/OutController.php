<?php

namespace backend\modules\out\controllers;

use Yii;
use backend\modules\out\models\Out;
use backend\modules\out\models\OutSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OutController implements the CRUD actions for Out model.
 */
class OutController extends Controller
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
     * Lists all Out models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OutSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Out model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Out model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Out();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Out model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Out model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Out model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
<<<<<<< HEAD:check_cars/backend/modules/out/controllers/OutController.php
     * @return Out the loaded model
=======
     * @return Data the loaded model
>>>>>>> ebd5be19441c3573c1956f4c3eb06e2a92c406a7:check_cars/backend/modules/data/controllers/DataController.php
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
<<<<<<< HEAD:check_cars/backend/modules/out/controllers/OutController.php
        if (($model = Out::findOne($id)) !== null) {
=======
        if (($model = Data::findOne($id)) !== null) {
>>>>>>> ebd5be19441c3573c1956f4c3eb06e2a92c406a7:check_cars/backend/modules/data/controllers/DataController.php
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
