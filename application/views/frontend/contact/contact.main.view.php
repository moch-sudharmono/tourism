<div class="main">
  <div class="container">
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12">
        <h2>Hubungi Kami / <em>Contacts Us</em></h2>
        <div class="content-page">
          <div class="row">
            <div class="col-md-12">
              <div id="map" class="gmaps margin-bottom-40" style="height:400px;"></div>
            </div>
            <div class="col-md-9 col-sm-9">
              
              <!-- BEGIN FORM-->
              <div class="alert alert-success succes">
                <strong>Success!</strong> The page has been added.
              </div>
              
              <div class="alert alert-danger error">
                <strong>Error!</strong> The daily cronjob has failed.
              </div>
              
              <form role="form" id="contact_form" method="post">
                <div class="form-group">
                  <label for="contacts-email">Alamat Surel / <em>Email</em></label>
                  <input type="email" class="form-control" id="contacts-email" name="email">
                </div>
                <div class="form-group">
                  <label for="contacts-message">Pertanyaan / <em>Message</em></label>
                  <textarea class="form-control" rows="5" id="contacts-message" name="pertanyaan"></textarea>
                </div>
                <div class="form-group" align="right">
	                <input type="submit" value="Submit" class="btn blue" />
              	</div>
              </form>
              <!-- END FORM-->
            </div>

            <div class="col-md-3 col-sm-3 sidebar2">
              <h3>Kontak Kami / <em>Our Contacts</em></h3>
              <address>
                <strong>Loop, Inc.</strong><br>
                795 Park Ave, Suite 120<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">P:</abbr> (234) 145-1810
              </address>
              <address>
                <strong>Email</strong><br>
                <a href="mailto:info@email.com">info@email.com</a><br>
                <a href="mailto:support@example.com">support@example.com</a>
              </address>
              <ul class="social-icons margin-bottom-40">
                <li><a href="#" data-original-title="facebook" class="facebook"></a></li>
                <li><a href="#" data-original-title="github" class="github"></a></li>
                <li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
                <li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
                <li><a href="#" data-original-title="rss" class="rss"></a></li>
              </ul>        
            </div>
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
  </div>
</div>

<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script src="<?php echo base_url() ?>inc/global/plugins/gmaps/gmaps.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>inc/frontend/pages/scripts/contact-us.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url() ?>inc/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>inc/global/plugins/jquery-validation/js/additional-methods.min.js"></script>

<script>
	var contactValidation = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation
            var form1 = $('#contact_form');
            var error1 = $('.alert-danger', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {
                    
                },
                rules: {
                    pertanyaan: {
                        minlength: 10,
						maxlength: 400,
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    Metronic.scrollTo(error1, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success1.show();
                    error1.hide();
                }
            });


    }

</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        ContactUs.init();
		contactValidation();
    });
</script>


<!-- END PAGE LEVEL JAVASCRIPTS -->