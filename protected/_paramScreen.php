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

<?php //indlude the floating div jquery plugin ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/jquery.floatobject-1.0.js"); ?>


 
<?php       

//the data array of the data provider
$dataP = $dataProvider->getData();
$level1data = $level1dataProvider->getData();
$level2data = $level2dataProvider->getData();
$level3data = $level3dataProvider->getData();

$this->widget('zii.widgets.grid.CGridView', array(
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
			));
?>

<script type="text/javascript">
    $(function() {
        
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
                var lev2Selected = $('li.ui-selected').attr('paramId');
                var param_name = $(this).attr('paramName');
                
                //CreateParamLevel1List(param_name, "sub_param_id","=", lev2Selected);
            }
        });
        
        
        //make the level2 param list float
        $("#paramLevel2").makeFloat({x:"current",y:"current"});
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
        
        function CreateParamLevel1List(param_name)
        {
            var level2Selected = $("#paramLevel2Filter > ul > li.ui-selected").attr("paramId");
            var level1Filter = $("#filterParamLevel1").val();
            
             //alert(filter_value);
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

<?php
 /*
  $this->widget('ext.yii-jqTree.JQTree', array(
    'id' => 'tree',
    'data' => $treeArray,
    'dragAndDrop' => true,
    'selectable' => true,
    'saveState' => true,
    'autoOpen' => false,
    'htmlOptions' => array(
        'class' => 'red',
        'ondragstart'=>'javascript: alert("drag start")',
    ),
    'options'=>array(
        'onCanMove'=>'js: function(node){
                if (! node.parent.parent) {
                    // Example: Cannot move root node
                    return false;
                }
                else {
                    return true;
                }
            }',
        'onCanMoveTo'=>'js: function(moved_node, target_node, position){
                if (!target_node) {
                // Example: can move inside menu, not before or after
                    return false;
                }
                else {
                    return true;
                }

            }',
        
        
    ),
  ));
*/

?>