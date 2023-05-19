<?php

/** @var yii\web\View $this */
/** @var string $content */
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;


AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="layui-layout layui-layout-admin">

    <!--顶栏-->
    <div class="layui-header">

        <div class="layui-logo layui-hide-xs layui-bg-black">

        </div>

        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item layui-hide-xs"><a href="<?=Url::to(['site/index'])?>">看板</a></li>
            <li class="layui-nav-item layui-hide-xs"><a href="<?=Url::to(['site/about'])?>">关于</a></li>
            <li class="layui-nav-item layui-hide-xs"><a href="<?=Url::to(['site/contact'])?>">联系</a></li>
        </ul>

        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item layui-hide-xs"><a href="javascript:;">设置</a></li>
            <li class="layui-nav-item layui-hide-xs"><a href="javascript:;">登出</a></li>
        </ul>
    </div>

    <!--边栏-->
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree">
                <li class="layui-nav-item ">
                    <a class="" href="javascript:;">menu group 1</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">menu 1</a></dd>
                        <dd><a href="javascript:;">menu 2</a></dd>
                        <dd><a href="javascript:;">menu 3</a></dd>
                        <dd><a href="javascript:;">the links</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <!--内容-->
    <div class="layui-body">
        <div style="padding: 15px;"><?=$content?></div>
    </div>

    <!--底栏-->
    <div class="layui-footer">
        <div class="layui-row">
            <div class="layui-col-md6">&copy; My Company <?= date('Y') ?></div>
            <div class="layui-col-md6" style="text-align: right;"><?= Yii::powered() ?></div>
        </div>
    </div>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
