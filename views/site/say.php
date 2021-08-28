<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Hui';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Hello <?= Html::encode($message); ?>!
    </p>
    <p>
        Hello <?= Html::encode($text); ?>!
    </p>

    <code><?= __FILE__ ?></code>
</div>
