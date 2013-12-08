nhp = new Object();


$(document).ready(function () {
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
   $('#fanBtnContainer').hover(function() {
		   $('#h4_FanButtons').hide();
		   $('#DIV_FanButtons').show();
	   }, function () {
		   $('#DIV_FanButtons').hide();
		   $('#h4_FanButtons').show();
	   

   });
   
   $('[name="rulePanel"]').hover(function(){
	$(this).removeClass('panel-default').addClass('panel-primary');   
   }, function (){
	   $(this).removeClass('panel-primary').addClass('panel-default'); 
   });
   
   $('.lnkSocial').tooltip();
   
   }); //end of docReady
   
   nhp.ShowButtons = function() {
	   	   
	   
   }
   
   nhp.ShowSongs = function () {
	   
   }
   
   