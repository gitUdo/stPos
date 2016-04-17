<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
?>
<div class="LoginScreen">
    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <div>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username', ['inputOptions' => ['autofocus' => true, 'placeholder'=>'User Name'],'labelOptions'=>['hidden'=>true]]) ?>
                <?= $form->field($model, 'password', ['inputOptions' => ['placeholder'=>'Password'],'labelOptions'=>['hidden'=>true]])->passwordInput() ?>
                <div>
                    <?= Html::submitButton('Login', ['class' => 'login login-inside', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
