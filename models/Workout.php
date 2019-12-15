<?php


namespace app\models;

use yii\db\ActiveRecord;

class Workout extends ActiveRecord
{

    public $name;
    public $description;
    public $category_id;
    public $time_duration;
    public $created_at;
    public $updated_at;


    public static function tableName()
    {
        return 'workout';
    }

    public function rules()
    {
        return [
            [['name', 'category_id', 'workout_description', 'time_duration'], 'required'],
            [['created_at', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s') ]
        ];
    }





}