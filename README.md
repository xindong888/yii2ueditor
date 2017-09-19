功能说明:

文本输入,图片上传,图片在线管理,涂鸦,视频上传等都可以完美使用
![image](https://github.com/xindong888/yii2ueditor/blob/master/pic.png?raw=true)

使用说明:

在控制器内他添加如下代码:
```php
class PostsController extends Controller
{
    public function actions()
    {
        return [
            'yii2editor'=>[
                'class'=>UEditorActionX::className(),
                'config'=>[
                    'imagePathFormat'=>'/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}',
                    //'imageManagerUrlPrefix'=>'http://localhost',//前缀,主要是为了前台访问的
                    'imageManagerListPath'=>Yii::getAlias('@web').'/upload/image/'//这个是必填的,显示图片列表
                ]
            ]
        ];
    }
}
```

视图表单内添加:

```php

            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'content')->widget(\yii2ueditor\UEditorX::className()) ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('common', 'Posted'), ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>

```