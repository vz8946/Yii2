<?php
/**
 * Entry 的视图.
 * User: weifengli
 * Date: 2014/12/30
 */
?>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin();?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end();?>