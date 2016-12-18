<?php

namespace app\controllers;

use app\models\Task;

class TaskController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function action1()
    {
        $model = new Task();
        $data = $model->getJson('customers.json');
        return $this->render('1', [
            'data' => $data
        ]);
    }

}
