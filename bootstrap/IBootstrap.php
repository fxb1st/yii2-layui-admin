<?php
/**
 * @date 2023/05/19 019 下午 2:20
 * @author fanxiaobin
 */


namespace app\bootstrap;


use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\grid\CheckboxColumn;
use yii\grid\GridView;

class IBootstrap implements BootstrapInterface
{

    /**
     * @inheritDoc
     */
    public function bootstrap($app) {
        \Yii::$container->set(GridView::class, ['tableOptions' => ['class' => 'layui-table layui-form']]);
    }
}