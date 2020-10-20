<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Userdetails;

class UserController extends Controller{

    public function actionUser(){
    
        $model = new Userdetails();
        echo "<pre>";
        print_r($model);
        exit;
        $arrPost = Yii::$app->request->post();
        if(!empty($arrPost)){
            $model->load($arrPost);
            echo "<pre>";
            print_r($model);exit;
            $model->save();
            Yii::$app->session->setFlash('success','Your data have successfully entered');
            return $this->render('userform',[
                'model'=> $model
            ]);
        }
        return $this->render('userform',[
            'model'=> $model
        ]);
   }
}