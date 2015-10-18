<?php

/* @var $this yii\web\View */

$this->title = 'Crowd Notes - Dashboard';
?>
<div class="site-index">
    <h1>Dashboard</h1>
    <div class="text-center">
        <?= yii\helpers\Html::a('Frontend', Yii::$app->urlManagerFrontend->createUrl(['site/index']), [
            'class' => 'btn btn-default btn-lg',
        ]) ?>
    </div>
</div>
