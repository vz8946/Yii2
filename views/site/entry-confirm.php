<?php
/**
 * EntryForm 视图
 * User: weifengli
 * Date: 2014/12/30
 */
?>

<?php
use yii\helpers\Html;
?>
<p>You have entered the fillowing informaton</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
