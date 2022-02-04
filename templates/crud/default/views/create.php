<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = <?= $generator->generateString(Inflector::camel2words(StringHelper::basename($generator->modelClass).' Baru')) ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString('Daftar '. /*Inflector::pluralize*/(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-create">
<div class="row">
    <div class="col-md-12">
        <div class="x_panel ">
            <div class="x_title">
             
            <h3><?= "<?= " ?>Html::encode($this->title) ?></h3>

            </div>
            <div class="x_content">

           
<?= "<?= " ?>$this->render('_form', [
    'model' => $model,
]) ?>

            </div>
        </div>
    </div>
</div>

</div>

