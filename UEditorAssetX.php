<?php
/**
 * Created by PhpStorm.
 * User: lqj
 * Date: 2017/9/12
 * Time: 下午7:39
 */

namespace yii2ueditor;


use yii\web\AssetBundle;

class UEditorAssetX extends AssetBundle
{
    public $js=[
        'ueditor.config.js',
        'ueditor.all.js',
    ];

    public function init()
    {
       $this->sourcePath=dirname(__FILE__).DIRECTORY_SEPARATOR.'resource';
    }
}