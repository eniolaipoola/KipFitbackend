<?php


namespace app\models;


use yii\base\Model;

class Category extends Model
{

    public $name;
    public $description;
    public $created_at;
    public $updated_at;


    public static function tableName()
    {
        return 'workout_category';
    }

    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['created_at', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s') ]
        ];
    }
}