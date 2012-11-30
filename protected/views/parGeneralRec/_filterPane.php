<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div id="kendo-filtering">
                    <input id="lev1Param" />
                    <br />
                    <input id="lev2Text" class="k-textbox" type="text"/>
                    
                    <script>
                    $(document).ready(function() {
                        
                        var url = window.location.href;
                        var param_name = url.substr(url.search('param_name')+11,url.length-(url.search('param_name')+11-1));
                        var grid = $("#grid").data("kendoGrid");
                        var paramLev1 = "";
                        //var $filter = new Array();
                        //var _lev1Filter = { logic: "or", filters: []};
                        $("#lev2Text").keyup(function(){
                            filterAll();
                            /*
                            var text = $(this).val();
                                if(text){
                                    //$("#grid").data("kendoGrid").dataSource.filter({field: "lev2Param",operator: "contains",value: text});
                                    //alert(text);
                                    $filter.push({field: "lev2Param",operator: "contains",value: text});
                                     grid.dataSource.filter({
                                        logic: "and",
                                        filters: $filter
                                    });
                                } else {
                                   // $("#grid").data("kendoGrid").dataSource.filter({});
                                   $filter.splice(0,1);
                                   grid.dataSource.filter({
                                        logic: "and",
                                        filters: $filter
                                    });
                                }*/
                        });
                        $("#lev1Param").kendoComboBox({
                            //index: 0,
                            placeholder: "התחל להקליד",
                            dataTextField: "param_value",
                            dataValueField: "param_id",
                            filter: "contains",
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
                            change: function(){
                                
                                paramLev1 = this.text();
                                filterAll();
                                /*var lev1Text = this.text();
                                
                                var lev2Text = $("lev2Text").val();
                                if(lev1Text){
                                    /*var _fltMain = { logic: "or", filters: [] };
                                    var _lev1Filter =  { logic: "or", filters: [] };
                                    _lev1Filter.filters.push({field: "lev1Param",operator: "eq",value: lev1Text});
                                    _fltMain.filters.push(_lev1Filter);
                                    ds.query({filter: _fltMain});
                                    $("#grid").data("kendoGrid").dataSource.filter(
                                        {field: "lev1Param",operator: "eq",value: lev1Text});
                                    $filter.push({field: "lev1Param",operator: "eq",value: lev1Text});    
                                    grid.dataSource.filter({
                                        logic: "and",
                                        filters: $filter
                                    });
                                } else {
                                    //$("#grid").data("kendoGrid").dataSource.filter({});
                                }*/
                                
                            }
                            
                        });
                        
                        /**
                         * the function adds a filter array to the grid's dataSource object.
                         * filter by:
                         *          1. param's level 1 which is selected in the combo box
                         *          2. param's level 2 which is a textBox free text
                         */
                        function filterAll()
                        {
                            //get the param's level 2 text
                            var paramLev2 = $("#lev2Text").val();
                            
                            var $filterObj = new Object();
                            $filterObj = {"paramLev1": "","paramLev2": ""};
                            var $filterArr = new Array();
                            var paramLev1Filter = {field: "lev1Param",operator: "eq",value: paramLev1};
                            var paramLev2Filter = {field: "lev2Param",operator: "contains",value: paramLev2}
                            if(paramLev1){
                                $filterObj.paramLev1 = paramLev1Filter;
                            }else{
                                $filterObj.paramLev1 = "";
                            }
                            
                            if(paramLev2){
                                $filterObj.paramLev2 = paramLev2Filter;
                            }else{
                                $filterObj.paramLev2 = "";
                            }
                            
                            for (key in $filterObj)
                                {
                                    var obj = $filterObj[key];
                                    if(obj!=""){
                                        $filterArr.push(obj);
                                    }
                                }
                                
                            //add the filter array to the grid's dataSource object
                                grid.dataSource.filter({
                                        logic: "and",
                                        filters: $filterArr
                                    });
                            
                        }
                    });
                   </script>
                </div>
