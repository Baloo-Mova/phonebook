<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Phones */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Телефоны';
$this->params['breadcrumbs'][] = $this->title;
$badkey = [];
if(Yii::$app->user->isGuest){
    $badkey = [6];
}
$columns = [
            ['class' => 'yii\grid\SerialColumn'],
            'PhoneNumber',
            'Street',
            'HomeNumber',
            'Flat',
            'FIO', 
            ['class' => 'yii\grid\ActionColumn'],];

foreach($columns as $key=>$value){
        if(in_array($key,$badkey)){
            unset($columns[$key]);
        }
    }

?>
<div class="phones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'summary' => '', 
        'emptyText'=>'Результаты соответствующие вашему запросу не найдены',
        'columns' => $columns,
        ]);
?>
</div>
