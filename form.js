function validateSignInForm(){
   var email = password = "";
   var emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
   var passwordPattern = /^.{6,}[^' ']+/;
   var isValid = true;
   
   email = jQuery("#email").val();
   password = jQuery("#registration_password").val();

   if(email == ""){
      showError("#email", "Required");
      isValid = false;
   }
   else
   if(!emailPattern.test(email)){
      showError("#email", "Invalid email id");
      isValid = false;
   }
   else{
      removeError("#email");
   }

   if(password == ""){
      showError("#registration_password", "Required");
      isValid = false;
   }
   else
   if(!passwordPattern.test(password)){
      showError("#registration_password", "Password must be greater than 6 characters. No space allowed");
      isValid = false;
   }
   else{
      removeError("#registration_password");
   }

   if(isValid){
      return true;
   }
   else{
      return false;
   }

}

function validateSignUpForm(){
   var firstName = lastName = email = password = phone = company = "";

   firstName = jQuery("#firstName").val();
   lastName = jQuery("#lastName").val();
   email = jQuery("#email").val();
   password = jQuery("#registration_password").val();
   phone = jQuery("#phone").val();
   company = jQuery("#company").val();
   var namePattern = /^[a-zA-Z]+$/;
   var emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
   var passwordPattern = /^.{6,}[^' ']+/;
   var phonePattern = /^[0-9]+$/;
   var isValid = true;
   
   if(firstName == ""){
      showError("#firstName", "Required");
      isValid = false;
   }
   else
   if(!namePattern.test(firstName)){
      showError("#firstName", "Only alphabets are allowed");
      isValid = false;
   }
   else{
      removeError("#firstName");
   }

   if(lastName == ""){
      showError("#lastName", "Required");
      isValid = false;
   }
   else
   if(!namePattern.test(lastName)){
      showError("#lastName", "Only alphabets are allowed");
      isValid = false;
   }
   else{
      removeError("#lastName");
   }

   if(email == ""){
      showError("#email", "Required");
      isValid = false;
   }
   else
   if(!emailPattern.test(email)){
      showError("#email", "Invalid email id");
      isValid = false;
   }
   else{
      removeError("#email");
   }

   if(password == ""){
      showError("#registration_password", "Required");
      isValid = false;
   }
   else
   if(!passwordPattern.test(password)){
      showError("#registration_password", "Password must be greater than 6 characters. No space allowed");
      isValid = false;
   }
   else{
      removeError("#registration_password");
   }


   if(phone == ""){
      showError("#phone", "Required");
      isValid = false;
   }
   else
   if(!phonePattern.test(phone)){
      showError("#phone", "Invalid phone number");
      isValid = false;
   }
   else{
      removeError("#phone");
   }

   if(company == ""){
      showError("#company", "Required");
      isValid = false;
   }
   else
   if(!namePattern.test(company)){
      showError("#company", "Only alphabets are allowed");
      isValid = false;
   }
   else{
      removeError("#company");
   }


   if(isValid){
      return true;
   }
   else{
      return false;
   }
   
}

function showError(id, msg){
   jQuery(id).closest(".styled-input").addClass("error-block");
   jQuery(id).closest(".styled-input").find(".error").text(msg);
}

function removeError(id){
   jQuery(id).closest(".styled-input").removeClass("error-block");
}


jQuery(document).ready(function (){

   if(jQuery('#sf_form_salesforce_w2l_lead_3').length == 1){

      function showErrorSf(id, msg){
         var length =  jQuery(id).closest(".sf_field").find('.error_message').length;
         if(length == 0){
            jQuery(id).closest(".sf_field").append('<span class="error_message">'+msg+'</span>');
         }
         else{
            jQuery(id).closest(".sf_field").find('.error_message').text(msg);
         }
         
      }

      function removeErrorSf(id){
         jQuery(id).closest(".sf_field").find('.error_message').remove();
      }

      jQuery("#sf_form_salesforce_w2l_lead_3").submit(function() {

         var firstName = lastName = email = password = phone = company = "";

         firstName = jQuery("#sf_first_name").val();
         lastName = jQuery("#sf_last_name").val();
         email = jQuery("#sf_email").val();
         phone = jQuery("#sf_phone").val();
         var namePattern = /^[a-zA-Z]+$/;
         var emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
         var phonePattern = /^[0-9]+$/;
         var isValid = true;
      
         if(firstName == ""){
            showErrorSf("#sf_first_name", "Required");
            isValid = false;
         }
         else
         if(!namePattern.test(firstName)){
            showErrorSf("#sf_first_name", "Only alphabets are allowed");
            isValid = false;
         }
         else{
            removeErrorSf("#sf_first_name");
         }

         if(lastName == ""){
            showErrorSf("#sf_last_name", "Required");
            isValid = false;
         }
         else
         if(!namePattern.test(lastName)){
            showErrorSf("#sf_last_name", "Only alphabets are allowed");
            isValid = false;
         }
         else{
            removeErrorSf("#sf_last_name");
         }

         if(email == ""){
            showErrorSf("#sf_email", "Required");
            isValid = false;
         }
         else
         if(!emailPattern.test(email)){
            showErrorSf("#sf_email", "Invalid email id");
            isValid = false;
         }
         else{
            removeErrorSf("#sf_email");
         }

         if(phone != '' && !phonePattern.test(phone)){
            showErrorSf("#sf_phone", "Invalid phone number");
            isValid = false;
         }
         else{
            removeErrorSf("#sf_phone");
         }

         alert(isValid);

         if(isValid){
            return true;
         }
         else{
            return false;
         }
      });
   }
   

   if(jQuery("#sign-in-form").length == 1){
      jQuery("#sign-in-form input").change(function(){
         var isFormValid = true;
         jQuery(".styled-input .input-field").each(function(){
            if (jQuery(this).val().length > 0){     
                jQuery(this).closest(".styled-input").find(".input-lbl").addClass("highlight");
                jQuery(this).focus();
            }else{
                jQuery(this).closest(".styled-input").find(".input-lbl").removeClass("highlight");   
            }  
         });
      });

   }

   jQuery(".eye-icon").click(function(){
      jQuery(".eye-icon").addClass("hide");
      jQuery(this).removeClass("hide");
      var x = document.getElementById("registration_password");
      if (x.type === "password") {
         x.type = "text";
      } else {
         x.type = "password";
      }
      return false;
   })

   if(jQuery("#magplus_signup2").length == 1){
      jQuery("#magplus_signup2 input").change(function(){
         var isFormValid = true;
         jQuery(".styled-input .input-field").each(function(){
            if (jQuery(this).val().length > 0){     
                jQuery(this).closest(".styled-input").find(".input-lbl").addClass("highlight");
                jQuery(this).focus();
            }else{
                jQuery(this).closest(".styled-input").find(".input-lbl").removeClass("highlight");   
            }  
         });
      });

      jQuery('#accept_terms_0').on('change', function(){
         var currentvalue = jQuery('#accept_terms').val();
         if(currentvalue =='true'){
            jQuery('#accept_terms').val('false');
         }
         else{
            jQuery('#accept_terms').val('true');
         }
      });

       jQuery('#gdpr_0').on('change', function(){
         var currentvalue =  jQuery('#gdpr').val();
         if(currentvalue =='true'){
            jQuery('#gdpr').val('false');
         }
         else{
            jQuery('#gdpr').val('true');
         }
      });

      setTimeout(function(){ 
         var currentURL = window.location.href;
         jQuery('#registration_url').val(jQuery('#registration_url').val()+currentURL );

      }, 3000);  

      jQuery.get("https://ipinfo.io", function (response) {
         console.log(response);
         jQuery(".00N7F00000HNBcC").val(" " + response.ip);
         jQuery(".state_sf").val(" " + response.city + ", " + response.region);
         jQuery(".city_sf").val(" " + response.city);
         jQuery(".country_sf").val(" " + response.country);
         jQuery(".zip_sf").val(" " + response.postal);
         jQuery(".street_sf").val(" " + response.loc);
         jQuery("#details").html(JSON.stringify(response, null, 4))
      }, "jsonp");
   }

  jQuery("#view-more-case-studies").click( function(e) {
      e.preventDefault(); 
      jQuery(this).hide();
      jQuery('.loading-spinner').show();
      var offset = jQuery('#offsetValue').val();
      var termId = jQuery('#term_id').val();
      jQuery.ajax({
         type : "post",
         url : myAjax.ajaxurl,
         data : {action: "generate_case_studies_html",offset:offset,termId:termId},
         success: function(response) {
            jQuery('.loading-spinner').hide();
            if(jQuery.trim(response) != ""){
               jQuery('.case-studies-listing').append(response);
               offset = parseInt(offset) + parseInt(4);
               jQuery('#offsetValue').val(offset);
               jQuery('#view-more-case-studies').show();
            }
            else{
               jQuery('#view-more-case-studies').hide();
            }
            //AOSrefresh();
            return false;
         }
      })   
   });

   jQuery(".casestudyLink").click(function(e){
      e.preventDefault(); 
      jQuery('.loading-spinner').show();
      var offset = 0;
      jQuery(".tab-item").removeClass("active");
      jQuery(this).parent().addClass("active");
      var termId = jQuery(this).data('value');
      jQuery('#offsetValue').val(0);
      jQuery('#term_id').val(termId);
      jQuery.ajax({
         type : "post",
         url : myAjax.ajaxurl,
         data : {action: "generate_case_studies_html",offset:offset,termId:termId},
         success: function(response) {
            jQuery('.loading-spinner').hide();
            if(jQuery.trim(response) != ""){
               jQuery('.case-studies-listing').html('');
               jQuery('.case-studies-listing').append(response);
               jQuery("#view-more-case-studies").show();
               offset = parseInt(offset) + parseInt(4);
               jQuery('#offsetValue').val(offset);
            }
            else{
               jQuery("#view-more-case-studies").hide();
            }
            return false;
         }
      })
      return false;

   });

   jQuery(document).on('click','.pagination li', function(e){
      e.preventDefault();
      jQuery('.loader').show();
      var current_page = 0;
      var new_page = 0;
      var pageId = 0;
      var id = jQuery(this).attr("id");
      if(id == "previous-page" || id == "next-page"){
         if(id == "next-page"){
            current_page = jQuery("#current_page").val();
            total_pages = jQuery('#total_pages').val();
            if(current_page == total_pages){
               return false;
            }
            jQuery('.pagination li').removeClass('active');
            new_page = parseInt(current_page) + parseInt(1);
            jQuery('.pageId-'+new_page).addClass('active');
            pageId = new_page;
         }
         else{
            current_page = jQuery("#current_page").val();
            if(current_page == 1){
               return false;
            }
            jQuery('.pagination li').removeClass('active');
            new_page = parseInt(current_page) - parseInt(1);
            jQuery('.pageId-'+new_page).addClass('active');
            pageId = new_page;
         }
      }
      else{
         jQuery('.pagination li').removeClass('active');
         pageId = jQuery(this).text();
         new_page = parseInt(pageId);
         jQuery('.pageId-'+new_page).addClass('active');
      }
      var offset = parseInt(pageId-1)*9;
      var termId = jQuery('#term_id').val();
      jQuery("#current_page").val(new_page);
      jQuery.ajax({
         type : "post",
         url : myAjax.ajaxurl,
         data : {action: "generate_tutorials_html",offset:offset,termId:termId},
         success: function(response) {
            jQuery('.loader').hide(); 
            if(jQuery.trim(response) != ""){
               jQuery('.video-container').html('');
               jQuery('.video-container').append(response);
            }
            return false;
         }
      })
      return false;
   });

   jQuery('.checkboxTutorials').change(function(){
      var termId = "";
      jQuery('.loader').show();
      if(jQuery(this).is(':checked')){
         if(jQuery(this).hasClass("allTutorials")){
            jQuery('.checkboxTutorials').prop("checked", false);
            jQuery(this).prop("checked", true);
         }
         else{
            jQuery('.allTutorials').prop("checked", false);
            jQuery(this).prop("checked", true);
         }
      }
      else{
         if(jQuery(this).hasClass("allTutorials")){
            jQuery(this).prop("checked", true);
         }
         if(jQuery('.checkboxTutorials:checked').length == 0){
            jQuery('.allTutorials').prop("checked", true);
         }
      }
      
      jQuery('.checkboxTutorials:checked').each(function(){
         termId = termId + jQuery(this).data('value') + ',';
      });

      termId = termId.replace(/,\s*$/, "");
      jQuery.ajax({
         type : "post",
         url : myAjax.ajaxurl,
         data : {action: "generate_tutorials_checkbox_html",termId:termId},
         success: function(response) {
            jQuery('.loader').hide();
            if(jQuery.trim(response) != ""){
               jQuery('.video-listing-block').html('');
               jQuery('.video-listing-block').append(response);
            }
            return false;
         }
      })
      return false;
   });
});
