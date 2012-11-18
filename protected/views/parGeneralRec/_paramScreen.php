<style>
    #sortable1, #sortable2, #sortable3,#tree { list-style-type: none; margin: 0; padding: 0; float: right; margin-right: 10px; background: #eee; padding: 5px; width: 160px;}
    #sortable1 li, #sortable2 li, #sortable3 li { margin: 5px; padding: 5px; font-size: 1.1em; width: 135px; text-align: right}
    #feedback { font-size: 1.4em; }
    .selectable .ui-selecting { background: #FECA40; }
    .selectable .ui-selected { background: #F39814; color: white; }
    .selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    .selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
    .ui-dialog .ui-dialog-title { float: right; margin: .1em 16px .1em 0; /*direction: rtl*/ }
    .ui-datepicker { z-index : 1003; }
    input.rounded {font-size: 16px}
    
    
</style>

<link href="http://cdn.kendostatic.com/2012.2.913/styles/kendo.default.min.css" rel="stylesheet">
<link href="http://cdn.kendostatic.com/2012.2.913/styles/kendo.common.min.css" rel="stylesheet"> 
<?php //indlude the floating div jquery plugin ?>
<?php //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/jquery.floatobject-1.0.js"); ?>

<?php //Yii::app()->clientScript->registerScriptFile("http://cdn.kendostatic.com/2012.2.913/js/jquery.min.js"); ?>
<?php Yii::app()->clientScript->registerScriptFile("http://cdn.kendostatic.com/2012.2.913/js/kendo.all.min.js"); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/protected/vendors/kendoui/assets/js/cultures/kendo.culture.he-IL.min.js"); ?>




 
<?php       

//the data array of the data provider
$dataP = $dataProvider->getData();
$level1data = $level1dataProvider->getData();
$level2data = $level2dataProvider->getData();
$level3data = $level3dataProvider->getData();

//$this->widget('zii.widgets.grid.CGridView', array(
/*$this->widget('ext.NGridView2.NGridView', array(
				'id'=>'paramView',
				'dataProvider'=>$dataProvider,
				'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridView2.css'),
                                'cssFile' => Yii::app()->baseUrl . '/css/gridView2.css',
                                'htmlOptions' => array('class' => 'grid-view rounded','direction'=>'rtl'),
				'columns'=>array(
							array(
									//the type is raw so the title can be generated from another data source
									'type'=>'raw',
									'name'=>$dataP[0]['lev1Title'],
									'value'=>'$data["lev1Val"]',
                                                                        
									),
							array(
									'type'=>'raw',
									'name'=>$dataP[0]['lev2Title'],
									'value'=>'$data["lev2Val"]',
                                                                        'htmlOptions'=>array('class'=>'droptrue','name'=>$dataP[0]["lev2Id"],'level'=>'2')
									),
						),
			)); */
?>

<?php 
/*
$this->widget('application.vendors.kendoui.widgets.KGrid', array(
		'dataSource' =>array('data'=>$dataP,
                    array(
                  'transport'=>
                        array(
                        'read'=>'index.php?r=parGeneralRec/kendoGridRead'
                        ),
                    'schema'=>array(
                    //    'data'=>'data',
                        'id'=>'id',
                        ),
                    
                      
                          
			'pageSize' => 10,
		),
	    'height' => 360,
	    'groupable' => true,
	    'scrollable' => true,
	    'sortable' => true,
	    'pageable' => true,
            'editable' => true,
            'selectable' => true,
            'navigatable' => true,
            //'toolbar' => array('"create",{name:"save",text:"save"}'),
	    'columns' => array(
	    	array(
	            'field' => "lev2Val",
	            //'width' => 90,
	            'title' => $dataP[0]['lev2Title'],
	        ),
	    	array(
	            'field' => "lev1Val",
	            'width' => 90,
	            'title' => $dataP[0]['lev1Title'],
	        ),
	    ),
		'htmlOptions' => array('id' => 'grid'),
	)
); */
?>

<!--<div id="grid"></div> -->
<table id="grid">
    <thead>
        <tr>
            <th data-field="lev2Param" style="text-align: right; direction: rtl;"><?php echo $dataP[0]['lev2Title']; ?></th>
            <th data-field="lev1Param" style="text-align: right; direction: rtl;"><?php echo $dataP[0]['lev1Title']; ?></th>
        </tr>
    </thead>    
</table>

<div id="edit-popup">
    
</div>
<script type="text/javascript">
    
              
                    
     $(document).ready(function() {
            kendo.culture("he-IL");
            var url = window.location.href;
            var param_name = url.substr(url.search('param_name')+11,url.length-(url.search('param_name')+11-1));
            $("#grid").kendoGrid({
                dataSource: {
                    autoSync: true,
                    transport: {                
                        read: {
                            dataType: "json",
                            url: "index.php?r=parGeneralRec/kendoGridRead",
                            data: {
                                param_name: param_name
                            }
                        },
                        update: {
                                type: "POST",
                                url: "index.php?r=parGeneralRec/kendoGridUpdate",
                                success: function(e){
                                    alert(e);
                                    //$("#grid").data("KendoGrid").dataSource.read();
                                },
                                error: function(e){
                                    alert(e);
                                }
                            }
                    },
                    schema: {  
                        data: "data",
                        total: "total",
                        model: {
                            id: "id",
                            fields: {                                            
                                        lev1Param: { type: "string" },
                                        lev2Param: { type: "string", editable: false }
                                 }
                            }
                    },
                    pageSize: 10,
                    batch: true
                },
                columns: [{
                                field:"lev1Param",
                                filterable: true,
                                attributes: {
                                  style: "text-align: right"  
                                },
                                editor: lev2ComboBox
                            },
                            {
                                field:"id",
                                filterable: true,
                                hidden: true
                            },
                            {
                                field:"lev2Param",
                                filterable: true,
                                attributes: {
                                  style: "text-align: right"  
                                }
                            }/*,
                            {
                                command: [{name: "edit", text:"עריכה"}],title:"&nbsp;"
                            }*/
                ],
                pageable: true,
                scrollable: false,
                sortable: true,
                //filterable: true,
                toolbar: [//'create'
                        { name: "create", text: "הוסף" }
                    ],
                editable: true//{mode: "inline" /*,template:$("#edit-popup")*/ }
                
                
            });
            
            //create a comboBox for the grid field On edit or On create
            function lev2ComboBox(container,options){
            
            var grid = $("#grid").data("kendoGrid");
            
                $('<input data-bind="value:' + options.field + '"/>')
                .appendTo(container)
                .kendoComboBox({
                    placeholder: "התחל להקליד",
                    dataTextField: "param_value",
                    dataValueField: "param_id",
                    filter: "contains",
                    autoBind: false,
                    dataSource: {
                        pageSize: 20,
                        transport: {
                            read: {
                                dataType: "json",
                                url: "index.php?r=parGeneralRec/kendoGridRead1",
                                data: {
                                    param_name: param_name
                                }
                            }
                            
                        },
                        schema:{
                            data: "data"
                        }
                    },
                    change: function(e){
                        $("#grid").data("kendoGrid").dataSource.read();
                    }
                });
         }
         
        $("ul.dragtrue").sortable({
            connetWith: "td"
        });
        
        $("ul.dragtrue").hover(function(){
            $(this).css('cursor','pointer');
        });
        
    $("#filterParamLevel1").keyup(function(){
           // $("#paramLevel1 > ul").html("");
            
            CreateParamLevel1List($(this).attr('paramName'));
            
        });
        

        /**
         * make the higher level selectable.
         * when selected, the selected paramId will go ajaxly to the server and update the lower level item list
         */
        $("#paramLevel2Filter > ul").selectable({
            selected: function(){
                //var lev2Selected = $('li.ui-selected').attr('paramId');
                var param_name = $(this).attr('paramName');
                
                CreateParamLevel1List(param_name);
            }
        });
        
        
        //make the level2 param list float
        //var yFloat = Math.min($("#paramLevel1").top,($("#paramLevel1").top / 2));
        //$("#paramLevel2").makeFloat({x:"current",y:"current"});
        //update the param list when a param level1 is dropped on a param level2 item
        $("ul.droptrue > li").droppable({
            drop: function(event,ui){
                //the level1 param table ID
                var lev1TblId = ui.draggable.attr('tblId');
                var lev1ItemText = ui.draggable.text();
                //the level2 param_id (=level1 sub_param_id)
                var lev2ItemId = $(this).attr('paramID');
                var lev2ItemText = $(this).text();
                    
                $("#updateConformation").dialog({
                    modal:true,
                    autoOpen: false,
                    height: 200,
                    buttons: {
                        'אישור': function(){
                            $.ajax({
                            //get the attributes labels ajaxly
                            url: "index.php?r=parGeneralRec/updateParam",
                            type: "POST",
                            async: "false",
                            dataType: "text",
                            data: "lev1TblId=" + lev1TblId + "&lev2ItemId="+lev2ItemId,
                            success: function(data){
                               //alert(data);

                                }
                            });
                        },
                        
                        'ביטול': function() {$(this).dialog('close'); }
                    }
                });
                
                /**
                 * open conformation dialog for asking the user whether he aprroves the new connection
                 */
                $("#updateConformation").html("<span>האם אתה בטוח שברצונך לקשר את " + "<b>" + lev1ItemText + "</b>" + " ל" + "<b>" + lev2ItemText  + "</b>" + "?</span>");
                $("#updateConformation").dialog("open");
                
            }
        })
        
        /$/*('thead > tr > th').click(function (){
          
            
            if ($('.filter').length == 0)
            {  
                $(this).parent().parent().append('<tr class="filter"></tr>')
                $('thead > tr').each(function(){
                    $('.filter').append('<th><input type="text" /></th>'); 
                });
                //alert($('thead > tr').length);
            }
            });
            */
        
        
        function CreateParamLevel1List(param_name)
        {
            /**
             *	fiter by 2 options:
             *	1: the user selected level2 item
             *	2: the user typed level1 item name
             **/
            var level2Selected = $("#paramLevel2Filter > ul > li.ui-selected").attr("paramId");
            var level1Filter = $("#filterParamLevel1").val();
            
             
             $.ajax({
                    url: "index.php?r=parGeneralRec/createParamItemListAjax",
                    type: "GET",
                    //async: "false",
                    dataType: "html",
                    data: {
                        	param_name: param_name,
                        	level2Selected: level2Selected,
                        	level1Filter: level1Filter
                    	  },
                    success: function(data){
                         /**
                          * update the lower level item list with the list, 
                          * that contains only the item which the sub_param_id = to the selected higher level param id.
                          */
                         $("#paramLevel1 > ul").html(data);
                         
                         /**
                          * make sure that the screen will not be smaller than the list of the param level 2
                          * which is floating, what makes the param level 1 the div that sets the screen height
                          */
                         /*if($("#paramLevel1 > ul").outerHeight() < $("#paramLevel2Filter > ul").outerHeight())
                             {
                                 $("#paramLevel1 > ul").outerHeight($("#paramLevel2Filter > ul").outerHeight());
                             }
                             else 
                             {
                                 $("#paramLevel1 > ul").outerHeight($("#paramLevel1 > ul").innerHeight());
                             }
                         */
                        
                    }
                            
                });
        
        }
        
    });
</script>
<br />

<hr>
<div id="paramLevel2Filter" style="width:200px ; border: 5px;border-color: black;float: right;text-align: center;" level="2">
    <h4>
    <?php echo $level2data[0]['param_heb_name']; ?>
        </h4>
    <ul id="sortable1" class="droptrue selectable" paramName="<?php echo $level1data[0]['param_name']; ?>">
        <?php
            foreach ($level2data as $param)
            {
                Yii::app()->controller->renderPartial('_paramRow',
                        array('id'=>$param['param_id'],'name'=>$param['param_value'],'tblId'=>$param['id'],'widget'=>$this)
                        );
            }
        ?>
    </ul>
</div>

<div id="paramLevel1" style="width:200px ;border: 5px;border-color: black;float: right;text-align: right;" level="2">
    <h4>
    <?php echo $level1data[0]['param_heb_name']; ?>
        </h4>
    <span><input id="filterParamLevel1" type="text" class="rounded" paramName="<?php echo $level1data[0]['param_name']; ?>"/></span>
    <ul id="sortable2" class="dragtrue" paramName="<?php echo $level1data[0]['param_name']; ?>">
        <?php
            foreach ($level1data as $param)
            {
                Yii::app()->controller->renderPartial('_paramRow',
                        array('id'=>$param['param_id'],'name'=>$param['param_value'],'tblId'=>$param['id'],'widget'=>$this)
                        );
            }
        ?>
    </ul>
</div>
<div id="paramLevel2" style="width:200px ;border: 5px;border-color: black;float: right;text-align: center;" level="2">
    <h4>
    <?php echo $level2data[0]['param_heb_name']; ?>
        </h4>
    <ul id="sortable1" class="droptrue selectable" paramName="<?php echo $level1data[0]['param_name']; ?>">
        <?php
            foreach ($level2data as $param)
            {
                Yii::app()->controller->renderPartial('_paramRow',
                        array('id'=>$param['param_id'],'name'=>$param['param_value'],'tblId'=>$param['id'],'widget'=>$this)
                        );
            }
        ?>
    </ul>
</div>  

<div id="updateConformation" title="עדכון <?php echo $level1data[0]['param_heb_name']; ?>">
  
</div>

