<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#"><?php echo Yii::app()->name; ?></small></a>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'<i class="icon-white icon-home"></i> Dashboard', 'url'=>array('/site/index')),
                        array('label'=>'<i class="icon-white icon-list-alt"></i> Master Data <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'<i class="icon icon-list-alt"></i> Data Provinsi', 'url'=>array('/provinsi')),
                            array('label'=>'<i class="icon icon-list-alt"></i> Data Kabupaten', 'url'=>array('/kabupaten')),
                            array('label'=>'<i class="icon icon-list-alt"></i> Data Kecamatan', 'url'=>array('/kecamatan')),
                            array('label'=>'<i class="icon icon-list-alt"></i> Data Kelurahan/Desa', 'url'=>array('/desa_kelurahan')),
                        )),
                        array('label'=>'<i class="icon-white icon-fire"></i> Data Kependudukan', 'url'=>array('/rumah_tangga')),
                        array('label'=>'<i class="icon-white icon-leaf"></i> Account', 'url'=>array('/site/page', 'view'=>'graphs')),
                        array('label'=>'<i class="icon-white icon-user"></i> Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'<i class="icon-white icon-share"></i> Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/banner.jpg">
</div><!-- subnav -->