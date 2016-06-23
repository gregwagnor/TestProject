<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Employee Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields:</p>

    <div class="row">
        <div class="col-lg-5">
<?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'firstname') ?>

                <?= $form->field($model, 'lastname') ?>

                <?= $form->field($model, 'status') ?>

                <?= $form->field($model, 'comments') ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary']) ?>
                </div>

<?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


