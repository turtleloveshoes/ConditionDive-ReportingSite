<?php
include 'header.php';
echo '<br/><br/>';
// echo '<div class="content">';
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>EmailMe Form - Contact Form</title>
        <link rel="shortcut icon" href="http://www.emailmeform.com/builder/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="http://www.emailmeform.com/builder/styles/dynamic.php?t=post" />
        <link rel="stylesheet" type="text/css" href="http://www.emailmeform.com/builder/theme_css/16fIrWewc2a1c086Occ5Vyq" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script type="text/javascript">
            if (typeof jQuery == 'undefined'){
                document.write(unescape("%3Cscript src='http://www.emailmeform.com/builder/js/jquery-1.4.4.min.js' type='text/javascript'%3E%3C/script%3E"));
            }
        </script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
        <script type="text/javascript">
            if (typeof $.ui == 'undefined'){
                document.write(unescape("%3Cscript src='http://www.emailmeform.com/builder/js/jquery-ui-1.7.2.custom.min.js' type='text/javascript'%3E%3C/script%3E"));
            }
        </script>

        <script type="text/javascript" src="http://www.emailmeform.com/builder/js/dynamic.php?t=post&t2=0&use_CDN=true"></script>

    </head>
    <body id="emf-container-wrap"  class="form">
        
        <div class="content">
        
        <div id="emf-container-outer">
            <div id="emf-container" >
                <div id="emf-logo"><a>EmailMeForm</a></div>

                <form id="emf-form"  class="topLabel" enctype="multipart/form-data" method="post" action="http://www.emailmeform.com/builder/form/16fIrWewc2a1c086Occ5Vyq"><div id="emf-form-instruction" class="emf-head-widget">
                        <div id="emf-form-title" class="emf-bold">Contact Form</div><div id="emf-form-description"></div>
                    </div>
                    <ul>
                        <li id="emf-li-0" class="emf-li-field emf-field-text data_container  " style="text-align:">
                            <label class="emf-label-desc" for="element_0">Name <span>*</span></label>
                            <div class="emf-div-field"><input id="element_0" name="element_0" value="" size="30" type="text" 
                                                              class="validate[required]"/></div>
                            <div class="emf-clear"></div>
                        </li><li id="emf-li-1" class="emf-li-field emf-field-email data_container  " style="text-align:">
                            <label class="emf-label-desc" for="element_1">Email <span>*</span></label>
                            <div class="emf-div-field"><input id="element_1" name="element_1" 
                                                              class="validate[required,custom[email]]"
                                                              value="" size="30" type="text" /></div>
                            <div class="emf-clear"></div>
                        </li><li id="emf-li-2" class="emf-li-field emf-field-text data_container  " style="text-align:">
                            <label class="emf-label-desc" for="element_2">Subject <span>*</span></label>
                            <div class="emf-div-field"><input id="element_2" name="element_2" value="" size="30" type="text" 
                                                              class="validate[required]"/></div>
                            <div class="emf-clear"></div>
                        </li><li id="emf-li-3" class="emf-li-field emf-field-textarea data_container  " style="text-align:">
                            <label class="emf-label-desc" for="element_3">Message <span>*</span></label>
                            <div class="emf-div-field"><textarea id="element_3" name="element_3" cols="60" rows="10" 
                                                                 class="validate[required]"></textarea></div>
                            <div class="emf-clear"></div>
                        </li>
                        <li id="emf-li-recaptcha" >
                            <script>
					
                                $(function(){
                                    $('#recaptcha_response_field').addClass('validate[required]');
                                });
                            </script>
                            <div>
                                <script type="text/javascript">
                                    var RecaptchaOptions = {
                                        theme: 'clean',
                                        custom_theme_widget: 'emf-recaptcha_widget'
                                    };
                                </script>
                                <script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LchicQSAAAAAGksQmNaDZMw3aQITPqZEsX77lT9"></script>

                                <noscript>
                                    <iframe src="https://www.google.com/recaptcha/api/noscript?k=6LchicQSAAAAAGksQmNaDZMw3aQITPqZEsX77lT9" height="300" width="500" frameborder="0"></iframe><br/>
                                    <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                                    <input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
                                </noscript></div>				
                        </li>
                        <li id="emf-li-post-button" class="right">
                            <input  value="Send email" type="submit" onmouseover="return true;" />
                        </li>
                    </ul>
                    <input name="element_counts" value="4" type="hidden" />
                    <input name="embed" value="form" type="hidden" />
                </form>
            </div></div>
            
        </div><!--content-->

        <br /><div style="text-align:center"><font face="Verdana" size="2" color="#000000">Powered by</font><span style="position: relative; padding-left: 3px; bottom: -5px;"><img src="http://www.emailmeform.com/builder/images/footer-logo.png" /></span><font face="Verdana" size="2" color="#000000">EMF </font><a style="text-decoration:none;" href="http://www.emailmeform.com/" target="_blank"><font face="Verdana" size="2" color="#000000">Forms Online</font></a><br><font face="Verdana" size="2" color="#000000"><a style="line-height:20px;font-size:70%;text-decoration:none;" href="http://www.emailmeform.com/report-abuse.html?http://www.emailmeform.com/builder/form/16fIrWewc2a1c086Occ5Vyq" target="_blank">Report Abuse</a></font></div>
        <script type="text/javascript">
            EMF_jQuery(function(){
                EMF_jQuery("#emf-form").validationEngine({
                    validationEventTriggers:"blur",
                    scroll:true
                });



                EMF_jQuery("#emf-form ul li").mousedown(highlight_field_on_mousedown);
                EMF_jQuery("#emf-form ul li input, #emf-form ul li textarea, #emf-form ul li select").focus(highlight_field_on_focus);

                var form_obj=EMF_jQuery("#emf-container form");
                if(form_obj.length>0 && form_obj.attr('action').indexOf('#')==-1 && window.location.hash){
                    form_obj.attr('action', form_obj.attr('action')+window.location.hash);
                }
	
                init_rules();
            });

            EMF_jQuery(window).load(function(){
                post_message_for_frame_height();
	
            });



            var emf_widgets={text : 
                    function(index){
                    return $("#element_"+index).val();
                }
                ,number : 
                    function(index){
                    return $("#element_"+index).val();
                }
                ,textarea : 
                    function(index){
                    return $("#element_"+index).val();
                }
                ,checkbox : 
                    function(index){
                    var arr=new Array();
                    $("input[name='element_"+index+"[]']:checked").each(function(){
                        arr[arr.length]=this.value;				
                    });
                    var result=arr.join(", ");
                    return result;
                }
                ,radio : 
                    function(index){
                    var result="";
                    $("input[name=element_"+index+"]:checked").each(function(){
                        result=this.value;				
                    });
                    return result;
                }
                ,select : 
                    function(index){
                    return $("#element_"+index).val();
                }
                ,email : 
                    function(index){
                    return $("#element_"+index).val();
                }
                ,phone : 
                    function(index){
                    var arr=new Array();
                    $("input[id^=element_"+index+"_]").each(function(){
                        arr[arr.length]=this.value;
                    });
				
                    var result="";
                    if(arr.length>0){
                        result=arr.join("-");
                    }else{
                        result=$("#element_"+index).val();
                    }
                    return result;
                }
                ,datetime : 
                    function(index){
                    var result="";
				
                    var date_part="";
                    if($("#element_"+index+"_year").length==1){
                        date_part=$("#element_"+index+"_year-mm").val()+"/"+$("#element_"+index+"_year-dd").val()+"/"+$("#element_"+index+"_year").val();
                    }

                    var time_part="";
                    if($("#element_"+index+"_hour").length==1){
                        time_part=$("#element_"+index+"_hour").val()+":"+$("#element_"+index+"_minute").val()+" "+$("#element_"+index+"_ampm").val();
                    }
				
                    if(date_part && time_part){
                        result=date_part+" "+time_part;
                    }else{
                        result=date_part ? date_part : time_part;
                    }
				
                    return result;
                }
                ,url : 
                    function(index){
                    return $("#element_"+index).val();
                }
                ,file : 
                    function(index){
                    return $("#element_"+index).val();
                }
                ,select_multiple : 
                    function(index){
                    return $("#element_"+index).val();
                }
                ,price : 
                    function(index){
                    var result="";
                    var arr=new Array();
                    $("input[id^=element_"+index+"_]").each(function(){
                        arr[arr.length]=this.value;
                    });
                    result=arr.join(".");
                    return result;
                }
                ,hidden : 
                    function(index){
                    return $("#element_"+index).val();
                }
                ,section_break : 
                    function(index){
                    return "";
                }
                ,page_break : 
                    function(index){
                    return "";
                }
                ,deprecated : 
                    function(index){
                    return $("#element_"+index).val();
                }
                ,address : 
                    function(index){
                    var result="";
                    var element_arr=$("input,select").filter("[name='element_"+index+"[]']").toArray();
                    result=element_arr[0].value+" "+element_arr[1].value+"\n"
                        +element_arr[2].value+","+element_arr[3].value+" "+element_arr[4].value+"\n"
                        +element_arr[5].value;
                    return result;
                }
                ,name : 
                    function(index){
                    var arr=new Array();
                    $("input[id^=element_"+index+"_]").each(function(){
                        arr[arr.length]=this.value;
                    });
                    var result=arr.join(" ");
                    return result;
                }
            };

            var emf_condition_id_to_js_map={1 : 
                    function(field_value, value){
                    return field_value.indexOf(value)>-1;
                }
                ,2 : 
                    function(field_value, value){
                    return field_value.indexOf(value)==-1;
                }
                ,3 : 
                    function(field_value, value){
                    return field_value.indexOf(value)==0;
                }
                ,4 : 
                    function(field_value, value){
                    return field_value.indexOf(value)==field_value.length-value.length;
                }
                ,5 : 
                    function(field_value, value){
                    return field_value==value;
                }
                ,6 : 
                    function(field_value, value){
                    return field_value!=value;
                }
                ,7 : 
                    function(field_value, value){
                    return field_value==value;
                }
                ,8 : 
                    function(field_value, value){
                    return field_value>value;
                }
                ,9 : 
                    function(field_value, value){
                    return field_value<value;
                }
                ,10 : 
                    function(field_value, value){
                    var date_for_field_value=Date.parse(field_value);
                    var date_for_value=Date.parse(value);
                    if(date_for_field_value && date_for_value){
                        return date_for_field_value == date_for_value;
                    }
                    return false;
                }
                ,11 : 
                    function(field_value, value){
                    var date_for_field_value=Date.parse(field_value);
                    var date_for_value=Date.parse(value);
                    if(date_for_field_value && date_for_value){
                        return date_for_field_value < date_for_value;
                    }
                    return false;
                }
                ,12 : 
                    function(field_value, value){
                    var date_for_field_value=Date.parse(field_value);
                    var date_for_value=Date.parse(value);
                    if(date_for_field_value && date_for_value){
                        return date_for_field_value > date_for_value;
                    }
                    return false;
                }
            };
            var emf_group_to_field_rules_map=[];
            var emf_group_to_page_rules_for_confirmation_map=[];


        </script>

    </body></html>

<?php // echo '</div>';
include 'footer.php';
?>