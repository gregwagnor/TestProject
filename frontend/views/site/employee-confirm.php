<?php
use yii\helpers\Html;

?>
<h3>Custom Employee Form</h3>
<p>Enter employee information</p>

<ul>
    <li><label>first name</label>:<?=Html::encode($model->firstname)?></li>
    <li><label>last name</label>:<?=Html::encode($model->lastname)?></li>
    <li><label>status</label>:<?=Html::encode($model->status)?></li>
    <li><label>comments</label>:<?=Html::encode($model->comments)?></li>
</ul>

