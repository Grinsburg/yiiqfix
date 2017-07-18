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
        'css/adminlogin.css',
        'css/adminpagestyle.css',
        'css/adminpanel.css',
        'css/aregstyle.css',
        'css/font-awesome.css',
        'css/font-awesome.min.css',
        'css/nprogress.css',
        'css/regendstyle.css',
        'css/regstyle.css',
        'css/reset.css',
        'css/service_page.css',
        'css/servicestyle.css',
        'css/style.css',
        'css/uregstyle.css',
    ];
    public $js = [
        'js/headhesive.min.js',
        'js/index.js',
        'js/jquery-1.7.2.min.js',
        'js/jquery-3.2.1.min.js',
        'js/jquery.easie.js',
        'js/jquery.easing.js',
        'js/jquery.placeholder.min.js',
        'js/js.js',
        'js/nprogress.js',
        'js/register.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
