<?php

/** @var yii\web\View $this */
/** @var object $dataProvider */

?>
<div class="site-index">
    <?=
    \yii\grid\GridView::widget([
        'id' => 'test-gridview',
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => \app\components\ICheckboxColumn::class],
            'id',
            'name'
        ]
    ]);
    ?>
    <button class="layui-btn" id="test">获取选中行数</button>
</div>
