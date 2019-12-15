<?php


namespace app\controllers;


use app\models\User;
use yii\rest\ActiveController;
use yii\web\Controller;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

    public function actionIndex(){
        return [
            "status" => "",
            "message" => "",

        ];
    }
}