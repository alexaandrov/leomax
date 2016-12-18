<?php

namespace app\controllers;

use app\models\Task;
use app\models\TmpOrderAmount;

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

    public function action2()
    {
        $data = TmpOrderAmount::find()
            ->all();
        return $this->render('2', [
            'data' => $data
        ]);
    }
}
