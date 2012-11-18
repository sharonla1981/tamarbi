<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div id="kendo-filtering">
                    <input id="lev1Param" />
                    
                    <script>
                    $(document).ready(function() {
                        
                        var url = window.location.href;
                        var param_name = url.substr(url.search('param_name')+11,url.length-(url.search('param_name')+11-1));
                        
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
                                var text = this.text();
                                if(text){
                                    $("#grid").data("kendoGrid").dataSource.filter({field: "lev1Param",operator: "eq",value: text});
                                } else {
                                    $("#grid").data("kendoGrid").dataSource.filter({});
                                }
                                
                            }
                            
                        });
                    });
                   </script>
                </div>
