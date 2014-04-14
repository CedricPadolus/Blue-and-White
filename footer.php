
    <div id="footer">
    	<div class="social">
    		<a href="https://www.behance.net/cpadolus/" alt="Sur Béhance" title="Sur Béhance" target="_new"><img src="<?php echo get_template_directory_uri(); ?>/img/behance-16x16.png"></a>
    		<a href="https://www.facebook.com/BlueDestroyer" alt="Sur Facebook" title="Sur Facebook" target="_new"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-16x16.png"></a>
    		<a href="http://www.linkedin.com/pub/cedric-r-padolus/26/3a4/a10" alt="Sur Linkedin" title="Sur Linkedin" target="_new"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-16x16.png"></a>
    		<a href="https://soundcloud.com/cedricpadolus" alt="Sur Soundcloud" title="Sur Linkedin" target="_new"><img src="<?php echo get_template_directory_uri(); ?>/img/soundcloud-16x16.png"></a>
    		<a href="https://twitter.com/CedricPadolus" alt="Sur Twitter" title="Sur Linkedin" target="_new"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-16x16.png"></a>
    	</div>
        &copy; CedricPadolus.com | Tous droits réservés | Design & code by Cedric Padolus | <a href="#top">&#8673; Haut de page</a>
      </div><!--footer ends here-->
</div><!--Container ends here-->
    <?php wp_footer(); ?>
         
  </body>
<script>
$("#content").hide(); 
$("#loading").show();
$(window).load(function() { 
$("#loading").fadeOut(function() { 
$("#content").fadeIn(1200); 
}); 
});
</script>
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
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

    </script> 
</html>