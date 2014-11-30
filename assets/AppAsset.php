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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/custom-style.css',
        'css/carousel.css',
    ];
    public $js = [        
        'js/jquery-1.4.4.min.js',
        'js/cookie/jquery.cookie.js',
        'js/jquery.mousewheel.min.js',       
        'js/jquery.carousel-1.1.js',        
        'js/custom-script.js',
        'js/form-validation.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
