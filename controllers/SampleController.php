<?php
namespace app\controllers;

use yii\console\Controller;

/**
 * Class SampleController 示例控制器
 * @package app\controllers
 */
class SampleController extends Controller
{
    /**
     * 默认动作
     * @return int
     */
    public function actionIndex()
    {
        $this->stdout('Hello, world!');
        return 0;
    }
}
