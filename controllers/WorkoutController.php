<?php


namespace app\controllers;


use app\models\Workout;
use yii\base\Controller;

class WorkoutController extends Controller
{
    public function actionIndex(){

        $model = new Workout();
        return $this->render('create');
    }


}