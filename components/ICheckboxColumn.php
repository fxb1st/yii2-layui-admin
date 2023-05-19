<?php
/**
 * @date 2023/05/19 019 下午 2:46
 * @author fanxiaobin
 */


namespace app\components;


use yii\grid\CheckboxColumn;
use yii\helpers\Html;

class ICheckboxColumn extends CheckboxColumn
{
    public $checkboxOptions = ['class' => 'checkbox-item', 'lay-filter' => 'checkOne'];

    protected function renderHeaderCellContent() {
        if ($this->header !== null || !$this->multiple) {
            return parent::renderHeaderCellContent();
        }

        return Html::checkbox($this->getHeaderCheckBoxName(), false, ['class' => 'select-on-check-all', 'lay-filter' => 'checkAll']);
    }
}