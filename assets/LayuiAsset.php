<?php
/**
 * @date 2023/05/18 018 下午 4:41
 * @author fanxiaobin
 */


namespace app\assets;


use yii\web\AssetBundle;

class LayuiAsset extends AssetBundle
{
    public $sourcePath = '@node/layui/dist';

    public $css = [
        'css/layui.css'
    ];

    public $js = [
        'layui.js'
    ];
}