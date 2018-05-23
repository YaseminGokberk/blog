<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\blog\models\Post */

$this->title = 'Create Post';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $model->blog_id = Yii::$app->session['viewPostId']; ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
