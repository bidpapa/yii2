<?php

namespace app\controllers;

class SiteController extends \yii\web\Controller
{

    public function actionIndex()
    {
        \Yii::debug("Hi fuckers");
        \Yii::warning("SuperWARNING");
        \Yii::error("Fatal Error");
        return $this->render('index');
    }

    public function actionJoin()
    {
        return $this->render('join');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }
}

?>