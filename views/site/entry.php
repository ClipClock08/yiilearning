<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Country;

$countries = Country::find()->orderBy('name')->all();
$countryUS = Country::findOne('US');
?>
    <h1>Countries</h1>
<?php if ($countries): ?>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li><?= $country->name . ': ' . $country->population; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('Ваше Имя') ?>

<?= $form->field($model, 'email')->label('Ваш Email') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>