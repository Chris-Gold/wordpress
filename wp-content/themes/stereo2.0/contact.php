<?php
/*
Template Name: Contact
*/
?>

<?php get_header();?>
  <div id="main" class="col-12">
    <div id="contact" class="container-fluid text-left">
      <div class="container">
        <h3>Contact us</h3>
        <div class="row">
          <div id="map" class="col-6 order-md-2 order-lg-1">
            <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11120.18551889012!2d1.2777964!3d45.830353699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1519150903000" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <h6>Toronto Office</h6>
              <p>8949 Kenamar Drive, suite 101 Boston, Ma 92121 Phone. 555.376.7872 Fax. 555.376.7873</p>

          </div>

          <div id="form" class="col-6 order-md-2 order-lg-1">
            <h2>Contact us in case you have any kind of a request for us, a tip or a cooperation idea!</h2>

            <form method="post" action="#">
              <div class="col-12">
                <input type="text" name="name" value="" placeholder="Your name">
              </div>

              <div class="col-12">
                <input type="email" name="email" value="" placeholder="Your e-mail">
              </div>

              <div class="col-12">
                <input type="text" name="phone" value="" placeholder="Your phone">
              </div>

              <div class="col-12">
                <input type="text" name="zipcode" value="" placeholder="Zip-code">
              </div>

              <div class="col-12">
                <input type="text" name="adress" value="" placeholder="Street Address">
              </div>

              <div class="col-12">
                <button type="submit">Request Quote</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- /.blog-main -->
  </div> <!-- /.row -->
  <?php get_footer(); ?>
