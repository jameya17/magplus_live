jQuery(document).ready(function (){
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
      jQuery('.loading-spinner').show();
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
            jQuery('.loading-spinner').hide();
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
      jQuery('.loading-spinner').show();
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
            jQuery('.loading-spinner').hide();
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
