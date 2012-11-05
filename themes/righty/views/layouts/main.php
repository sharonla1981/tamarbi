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
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
	
	<link href="http://cdn.wijmo.com/themes/rocket/jquery-wijmo.css" rel="stylesheet" type="text/css" title="rocket-jqueryui" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/wijmo/jquery-wijmo.css" /> -->
        
       
        
	<!--Wijmo Widgets CSS
	<link href="http://cdn.wijmo.com/jquery.wijmo-complete.all.2.0.0.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/wijmo/jquery.wijmo-complete.all.2.0.0.min.css" /> -->
	<?php /*Yii::app()->clientScript->registerCssFile(
              Yii::app()->assetManager->publish(
		Yii::app()->basePath . '/vendors/jqueryui/start/'
                ).
                '/jquery-ui.css', 'screen'
              );*/
	?>
	
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
        <!-- superfish menu extension -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-rtl.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-vertical.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-vertical-rtl.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-navbar-rtl.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-navbar.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-rtl-jqueryui/css/superfish-navbar.css" />
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/superfish-rtl-jqueryui/js/hoverIntent.js"); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/superfish-rtl-jqueryui/js/superfish.js"); ?>
        
        
	
        <script type="text/javascript">
            	jQuery(function(){
	            jQuery('ul.sf-menu').superfish();
	            
	            $("ul.sf-menu li").addClass("ui-state-default");
	
	            $("ul.sf-menu li").hover(function () { $(this).addClass('ui-state-hover'); },
	                                     function () { $(this).removeClass('ui-state-hover'); });
	
	        });

        </script>
        <?php /*
        <div style="padding-bottom: 2.5em;width: 100%;border-bottom-style: solid;border-bottom: #000">
            <ul class="sf-menu">
                <li>
                    <a href="index.php?r=site/index">דף הבית</a>
                </li>
                <li>
                    <a href="index.php?r=mkorotGauge/index">נתוני מקורות</a>
                </li>
                <li>
                    <a href="#">עדכון נתונים</a>
                    <ul>
        <?php 
        
                //superfish menu
                $model = ParGeneralRec::model()->paramScreenPanel();
                foreach ($model as $param)
                {
                    echo CHtml::openTag('li');
                    echo CHtml::openTag('a',array('href'=>'index.php?r=parGeneralRec/paramScreen&param_name='.$param->getAttribute('param_name')));
                    echo $param->getAttribute('param_heb_name');
                    echo CHtml::closeTag('a');
                    echo CHtml::closeTag('li');
                }
       
       ?>
                    </ul>
                </li>
            </ul>
       */ ?>
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
        
        </div><!-- mainmenu -->
        */ ?>
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
