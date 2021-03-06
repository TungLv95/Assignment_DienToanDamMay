<?php

namespace app\controllers;

use Yii;
use app\models\Chitiethoadon;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Sanpham;
use app\models\Hoadon;



/**
 * ChitiethoadonController implements the CRUD actions for Chitiethoadon model.
 */
class ChitiethoadonController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Chitiethoadon models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Chitiethoadon::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chitiethoadon model.
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
     * Creates a new Chitiethoadon model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Chitiethoadon();
        $list1 = Sanpham::find()->all();
        $list2 = Hoadon::find()->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index.php?r=chitiethoadon%2Findex');
        } else {
            return $this->render('create', [
                'model' => $model,
                'list1' => $list1,
                'list2' => $list2,
            ]);
        }
    }

    /**
     * Updates an existing Chitiethoadon model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $list1 = Sanpham::find()->all();
        $list2 = Hoadon::find()->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index.php?r=chitiethoadon%2Findex');
        } else {
            return $this->render('update', [
                'model' => $model,
                'list1' => $list1,
                'list2' => $list2,
            ]);
        }
    }

    /**
     * Deletes an existing Chitiethoadon model.
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
     * Finds the Chitiethoadon model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Chitiethoadon the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Chitiethoadon::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
