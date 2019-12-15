<?php


namespace app\controllers;

use app\models\Category;
use Yii;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex(){

        $model = new Category();
        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function actionCreate(){
        $model = new Category();

        var_dump($model);
        die();
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model
            ]);
        }
    }
}