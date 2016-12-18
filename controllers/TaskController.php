<?php

namespace app\controllers;

class TaskController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function action1()
    {
        return $this->render('1');
    }

}
