<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Supplier Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields:</p>

    <div class="row">
        <div class="col-lg-5">
<?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'vendor') ?>

                <?= $form->field($model, 'comments')->textArea(['rows' => 6]) ?>

                //$items = array("active","inactive");
                //$options = array('0','1');
                <?= $form->field($model, 'status')->dropDownList(array("active","inactive"),array('0','1')) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>

<?php ActiveForm::end(); ?>
        </div>
    </div>
</div>



