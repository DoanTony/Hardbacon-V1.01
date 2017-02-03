jQuery(document).ready(function () {
    var axeX = 0;
    var axeY = 0;
    
    var butNextVal = jQuery('#curlanguage').val();

    //Progress bar
    var progress = jQuery('.progress');
    var progressBar = jQuery('.progress-bar');
    var progressWitdh = 0;
    
    //Getting Statements into arrays
    var totalStatements = jQuery('.compass_statements').size();
    var currentStatement = 0;
    
    hideFooter();
    
    progress.hide();
    
    var jQuerystatements = jQuery('.compass_statements');
    jQuerystatements.hide();
    jQuery('.compass_green_logo').hide();
    
    jQuery(jQuerystatements.get(currentStatement)).fadeIn();
    
    if(jQuery(document.body).width() < 768)
        {
            jQuery('.options').before('<br>');
        }
    
    jQuery(".close_compass").click(function(){
        if(jQuery('.navbar').is(':visible'))
            {
                jQuery('.navbar').fadeOut();
                jQuery(".close_compass").html('v');
            }
        else{
            jQuery('.navbar').fadeIn();
            jQuery(".close_compass").html('^');
        }
    });
    
    //Compass button functions
    jQuery('#next').click(function(){
        
        if((document.getElementById('next').value == 'Next')||(document.getElementById('next').value == 'Suivant')||document.getElementById('next').value == 'Find out')
        {
            jQuery('#next').prop("disabled", true);
            setTimeout(function(){
                jQuery('#next').prop("disabled", false);
            }, 1000);
        }
        
        jQuery('.alert').attr('hidden','hidden');
        jQuery('.compass_body').css('background-color','#FFF');
        jQuery(document.body).css('background-color','#FFF');
        jQuery('.compass_subtitle').css('color','#00C6BD');
        jQuery('.compass_green_logo').removeAttr('hidden');
        jQuery('.compass_hb_logo').attr('hidden');
        jQuery('.compass_hb_logo').hide();
        jQuery('.compass_green_logo').show();
        
        //Mobile version
       // if(jQuery(document.body).width() < 768)
        //{          
            progress.show();
            
            //Check if answer is selected(mobile version)
            if((document.getElementById('next').value == 'Suivant')||document.getElementById('next').value == 'Next')
                {
                    if(jQuery(jQuerystatements.get(currentStatement)).find("input:radio").is(':checked')){}
                    else
                    {
                        //alert('Please choose an answer');
                        jQuery('.alert').removeAttr('hidden');
                        return false;
                    }
                }
            
            //Generates each statements per page
            jQuery(jQuerystatements.get(currentStatement)).fadeOut(function(){
            currentStatement = currentStatement + 1;
            progressWitdh = Math.round((currentStatement/(totalStatements -1 ))*100);
                                                         
            //Show after the last statement is answered    
            if(currentStatement == totalStatements)
            {
                progress.hide();
                jQuery(document.body).css('background-color','#00C6BD');
                jQuery('#next').css('border','2px solid #fff');
               
                //Sum of all the selected options
                var totalX = jQuery("input[name='optionX']:checked").serializeArray();
                var totalY = jQuery("input[name='optionY']:checked").serializeArray();
               
                jQuery.each(totalX, function(i,test){
                    axeX += parseFloat(test.value);
                });
                jQuery.each(totalY, function(i,selection){
                    axeY += parseFloat(selection.value);
                });
               
                addVal(axeX,axeY);
                jQuery('#next').hide();
               
                submit_val();
            }
            //While a statement exists
            else
            {
                //jQuery('#next').css('margin','auto');
                jQuery('.close_compass').css('color','#00C6BD');
               
                if(butNextVal == "en-US"){
                    document.getElementById('next').value = 'Next';
                }
                else{
                    document.getElementById('next').value = 'Suivant';
                }
                jQuery(jQuerystatements.get(currentStatement)).fadeIn();
                jQuery("html, body").animate({ scrollTop: jQuery('.compass').position().top }, 100);
               
                //Progress bar mouvement
                progressBar.attr('aria-valuenow',progressWitdh);
                progressBar.attr('style', ('width:'+progressWitdh+'%'));
                progressBar.contents().last()[0].textContent =   progressWitdh + '%';
               
                }
            });
        //}
        
        //Desktop version
       /* else
        {
            jQuery(jQuerystatements.get(currentStatement)).fadeOut(function(){
                jQuery('#next').css('border','none');
                jQuery('#next').attr('onclick','submit_val()');
                document.getElementById('next').value = 'Next';
                
                //Make all the statements appear on the page
                for(i = 1; i <= totalStatements; i++)
                {
                    currentStatement = i;
                    jQuery(jQuerystatements.get(currentStatement)).fadeIn();
                    
                }
                });
            
            //Sum of all the selected options
            var totalX = jQuery("input[name='optionX']:checked").serializeArray();
            var totalY = jQuery("input[name='optionY']:checked").serializeArray();
               
            jQuery.each(totalX, function(i,test){
                axeX += parseFloat(test.value);
            });
            jQuery.each(totalY, function(i,selection){
                axeY += parseFloat(selection.value);
            });
               
            
            addVal(axeX,axeY);    
        }   */ 
    });
    
    //Check if answer is selected (desktop version)
   /* if(jQuery(document.body).width() >= 768){
        jQuery('.compass').submit(function(){
            var checked = true;
            jQuery("input:radio").each(function(){
                var nom = jQuery(this).attr("name");
                if(jQuery('input:radio:checked').length <= jQuery('.statement').length){
                    checked = false;
                }
            });
            if(!checked){
                //alert('Please answer all questions');
                jQuery('.alert').contents().textContent = "PLease answer all questions";
                return false;
            }
        });
    //End desktop version
    }*/

//popup for linkedin    
    jQuery('.linkedin_share').on('click',function(e){
        jQuery(this).windowPopup(e);
    });

    var modal;
    var span = document.getElementsByClassName("close");
    
    jQuery('area').on('click',function(){
        modal = document.getElementById(jQuery(this).attr('alt'));
        modal.style.display = "block";
    });
    jQuery(span).on('click',function(){
        modal.style.display = "none";
    });
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});

function addVal(x,y){
    //Add the total score of X and Y to the form
    jQuery('.compass').append("<input type='hidden' name='submitValueX' value='"+x+"' />","<input type='hidden' name='submitValueY' value='"+y+"' />");
     return true;
}

function submit_val()
{
    jQuery('.compass').submit();
}

function submitForm(){
    var email,name;
    name=jQuery(".input_info input:text").val();
    email=jQuery(".input_info input[name='email']").val();
    
    jQuery(".sib_signup_box_inside_1 input:text").val(name);
    jQuery(".sib_signup_box_inside_1 input[name='email']").val(email);
    
    jQuery(".sib_signup_box_inside_1 input:submit").click();
    jQuery("#info").submit();
}
function submitFormFR(){
    var email,name;
    name=jQuery(".input_info input:text").val();
    email=jQuery(".input_info input[name='email']").val();
    
    jQuery(".sib_signup_box_inside_2 input:text").val(name);
    jQuery(".sib_signup_box_inside_2 input[name='email']").val(email);
    
    jQuery(".sib_signup_box_inside_2 input:submit").click();
    jQuery("#info").submit();
}

function hideFooter()
{
    jQuery('footer').hide();
    jQuery('.navbar').hide();
}

//popup for linkedin
jQuery.fn.windowPopup = function (e, intWidth, intHeight, blnResize) {
    
    // Prevent default anchor event
    e.preventDefault();
    
    // Set values for window
    intWidth = intWidth || '500';
    intHeight = intHeight || '400';
    strResize = (blnResize ? 'yes' : 'no');

    // Set title and open popup with focus on it
    var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
        strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,            
        objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
  };