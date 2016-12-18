<?php

namespace app\controllers;

use app\models\FileManager;
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
        $data = FileManager::getData('customers', 'json');
        return $this->render('1', [
            'data' => $data
        ]);
    }

    public function action2()
    {
        $sql = TmpOrderAmount::find()
            ->all();
        $json = FileManager::getData('orders-amount', 'json');
        $xml = FileManager::getData('orders-amount', 'xml');
        return $this->render('2', [
            'sql' => $sql,
            'json' => $json,
            'xml' => $xml
        ]);
    }
}
