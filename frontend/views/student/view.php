<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Student */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            's_name',
            's_roll_number',
            [
                'label'=>'Class',
                'value' => $model->schoolclass->class_name
            ],
            [
                'label'=>'Country',
                'value' => $model->country->country_name
            ],
            [
                'label'=>'State',
                'value' => $model->state->state_name
            ],
            [
                'label'=>'District',
                'value' => $model->district->district_name
            ],
            [
                'label'=>'Taluk',
                'value' => $model->taluk->taluk_name
            ],
           's_address',
        ]    
    ]) ?>

</div>
