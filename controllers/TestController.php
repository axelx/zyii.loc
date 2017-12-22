<?php
/**
 * Created by PhpStorm.
 * User: HP11
 * Date: 22.12.2017
 * Time: 17:20
 */

namespace app\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    public function actionDefault()
    {
        return 'Hello world!';

    }

    public function actionView($id)
    {
        return 'Hello '. $id;

    }

}