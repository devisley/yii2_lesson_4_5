<?php

namespace app\modules\admin\controllers;

use app\controllers\MyController;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends MyController
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionIndex()
    {
        return $this->render('index');
    }
}
