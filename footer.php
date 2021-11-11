<footer class="section novi-background bg-cover section-sm footer-classic context-dark">
    <div class="container">
        <a class="brand wow blurIn" href="<?php echo home_url() ?>">
            <?php echo get_logo() ?>
        </a>
      <ul class="contacts-modern footer-classic-list">
        <li class="wow fadeInLeft"><a class="heading-3" href="tel:<?php echo get_contact_field('secondary-phone-number') ?>"><?php echo get_contact_field('primary-phone-number', 49) ?></a></li>
        <li class="wow fadeInRight"><a class="heading-3" href="mailto:<?php echo get_contact_field('email') ?>"><?php echo get_contact_field('email', 49) ?></a></li>
      </ul>
      <ul class="list-inline list-inline-xxl list-social footer-classic-list">
        <li><a class="icon novi-icon fa fa-facebook" href="<?php echo get_contact_field('facebook-url', 49) ?>"></a></li>
        <li><a class="icon novi-icon fa fa-instagram" href="<?php echo get_contact_field('instagram-url') ?>"></a></li>
        <li><a class="icon novi-icon fa fa-youtube-play" href="<?php echo get_contact_field('youtube-url') ?>"></a></li>
      </ul>
      <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span></span><span> <?php echo get_bloginfo('title') ?>. <a href="https://oqila.uz"></a>OQILA.</span></p>
    </div>
  </footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="<?php echo get_resource_full_url('js/core.min.js'); ?>"></script>
<!--Color Switcher Mockup-->
<script src="<?php echo get_resource_full_url('js/script.js'); ?>"></script>
<script>
$('#buttonid').on('click',function(e){
  e.preventDefault();
  var name = $('#name').val();
  var email = $('#email').val();
  var mesg =$('#message').val();

  $.ajax({
    url:'/wp-json/feedback/v1/send',
      type:'POST',
      data:  'name='+name+'&email='+email+'&phone='+mesg,
      success: function(data)
      {
          if (data.status)
            $('#buttonid').after('<div class="alert alert-success"  role="alert"><strong>Success!</strong> Indicates a successful or positive action.</div>');
          else
            $('#buttonid').after('<div class="alert alert-danger" role="alert"><strong>Error!</strong> email did not sent, something went wrong.</div>');
      }
  });
});
</script>
</body>
</html>