<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="he_il" lang="he" dir="rtl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="he_il" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	<!--Theme
	<link href="http://cdn.wijmo.com/themes/rocket/jquery-wijmo.css" rel="stylesheet" type="text/css" title="rocket-jqueryui" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/wijmo/jquery-wijmo.css" /> -->
        
       
        
	<!--Wijmo Widgets CSS
	<link href="http://cdn.wijmo.com/jquery.wijmo-complete.all.2.0.0.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/wijmo/jquery.wijmo-complete.all.2.0.0.min.css" /> -->
	
	
	
 	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<div id="header">
            <div id="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/header_tamar.jpg" width=1100px /></div>
	</div><!-- header -->
     
       <?php 
                $model = ParGeneralRec::model()->paramScreenPanel();
                $items = array();
                foreach ($model as $param)
                {
                    $items[] = array('label'=>$param->getAttribute('param_heb_name'),'url'=>array('parGeneralRec/paramScreen&param_name='.$param->getAttribute('param_name')));
                }
       
       ?>
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-rtl.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-vertical.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-vertical-rtl.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-navbar-rtl.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-navbar.css" />
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/superfish-rtl-jqueryui/js/hoverIntent.js"); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/superfish-rtl-jqueryui/js/superfish.js"); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/superfish-rtl-jqueryui/js/superfish.js"); ?>
	
        <script type="text/javascript">
            	jQuery(function(){
	            jQuery('ul.sf-menu').superfish();
	            
	            $("ul.sf-menu li").addClass("ui-state-default");
	
	            $("ul.sf-menu li").hover(function () { $(this).addClass('ui-state-hover'); },
	                                     function () { $(this).removeClass('ui-state-hover'); });
	
	        });

        </script>
        <div class="rtl">
    <ul class="sf-menu">
			<li class="current">
				<a href="#a">menu item</a>
				<ul>
					<li>
						<a href="#aa">menu item that is quite long</a>
					</li>
					<li class="current">
						<a href="#ab">menu item</a>
						<ul>
							<li class="current"><a href="#">menu item</a></li>
							<li><a href="#aba">menu item</a></li>
							<li><a href="#abb">menu item</a></li>
							<li><a href="#abc">menu item</a></li>
							<li><a href="#abd">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">menu item</a>
			</li>
			<li>
				<a href="#">menu item</a>
				<ul>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">menu item</a>
			</li>	
		</ul>
    </div>

        
</div>
        <?php /*
        <div id="mainMbMenu">
		<?php $this->widget('ext.mbmenu.MbMenu',array(
			'items'=>array(
                            array('label'=>'בית', 'url'=>array('/site/index')),
                            array(
                                'label'=>'פעולות עדכון',
                                'items'=>$items,
                            )
                            
                            ),array(
				array('label'=>'בית', 'url'=>array('/site/index')),
				array('label'=>'פעולות', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'עדכון נתונים', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest) 
			), 
		));  ?>
        */ ?>
	</div><!-- mainmenu -->
        
	<?php /* $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	));*/ ?><!-- breadcrumbs -->
       

	<?php echo $content; ?>
	<div id="footer">
            <div id="logo_footer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/tamar_footer.jpg" width=1100px /></div>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
