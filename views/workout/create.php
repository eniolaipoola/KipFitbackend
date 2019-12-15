<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Create Workout';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Workout creation page.
    </p>

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="workout">Workout Name</label>
                <input type="email" class="form-control" id="workout">
            </div>
            <div class="form-group col-md-6">
                <label for="workout_picture">Workout Picture Url</label>
                <input type="password" class="form-control" id="workout_picture">
            </div>
        </div>
        <div class="form-group col-md-9">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="This workout Activity">
        </div>
        <div class="form-group col-md-3">
            <label for="time">Time Duration</label>
            <input type="text" class="form-control" id="time" placeholder="Time in Seconds">
        </div>
        <div class="form-group">
            <div class="form-group col-md-6">
                <label for="workout_video">Workout Video Url</label>
                <input type="text" class="form-control" id="workout_video">
            </div>
            <div class="form-group col-md-6">
                <label for="category">Category Id</label>
                <select id="category" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
        </div>
        <div class="form-group col-md-3" >
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
