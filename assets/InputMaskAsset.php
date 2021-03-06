<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class InputMaskAsset extends AssetBundle
{
    public $sourcePath = '@vendor';
    public $css = [
    ];
    public $js = [
        'bower/jquery-mask-plugin/dist/jquery.mask.min.js'
    ];
    public $depends = [
        //'yii\bootstrap\BootstrapAsset',
    ];
}
