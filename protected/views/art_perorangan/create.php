<?php
/* @var $this Art_peroranganController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List ArtPerorangan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage ArtPerorangan', 'url'=>array('admin')),
);
?>

<h3>Create ArtPerorangan</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>