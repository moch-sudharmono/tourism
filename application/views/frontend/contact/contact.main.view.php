<div class="main">
  <div class="container">
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12">
        <h2 class="ina">Tanya Kami</h2>
        <h2 class="eng">Ask Us</h2>
        <div class="content-page">
          <div class="row">
            <div class="col-md-12">
              <div id="map" class="gmaps margin-bottom-40" style="height:400px;"></div>
            </div>
            <div class="col-md-9 col-sm-9">
              
              <!-- BEGIN FORM-->
              <!--
              <div class="alert alert-success succes">
                <strong>Success!</strong> The page has been added.
              </div>
              
              <div class="alert alert-danger error">
                <strong>Error!</strong> The daily cronjob has failed.
              </div>
              -->
              <form action="<?php echo base_url() ?>frontend/contact/send" role="form" id="contact_form" method="post">
                <div class="form-group">
                  <label for="contacts-email">Alamat Surel / <em>Email</em></label>
                  <input type="email" class="form-control" id="contacts-email" name="email">
                </div>
                <div class="form-group">
                  <label for="contacts-message">Pertanyaan / <em>Message</em></label>
                  <textarea class="form-control" rows="5" id="contacts-message" name="pertanyaan"></textarea>
                </div>
                <div class="form-group">
                	<?php
						$a = rand(1,9);
						$b = rand(1,9);
						$c = $a + $b;
					?>
                  <label for="contacts-captcha">Captcha : Hasil Penjumlahan <?php echo $a.' + '.$b ?></label>
                  <input type="captcha" class="form-control" id="contacts-captcha" name="captcha">
                </div>
                <div class="form-group" align="right">
	                <input type="submit" name="submit" value="Kirim / Submit" class="btn blue" />
              	</div>
              </form>
              <!-- END FORM-->
            </div>
			<?php
            	$config = isset($config)?$config:array();
				$address = isset($config[0]->frontend_address)?$config[0]->frontend_address:"";
				$telp = isset($config[0]->frontend_telp)?$config[0]->frontend_telp:"";
				$email = isset($config[0]->frontend_email)?$config[0]->frontend_email:"";
				$fax = isset($config[0]->frontend_fax)?$config[0]->frontend_fax:"";
			?>
            <div class="col-md-3 col-sm-3 sidebar2">
              <h3>Kontak Kami / <em>Our Contacts</em></h3>
              <address>
                <p>
                	<?php echo $address ?>
                </p>
                <abbr title="Phone">P:</abbr> <?php echo $telp ?>
              </address>
              <address>
                <strong>Email</strong><br>
                <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a><br>
                
              </address>
              <ul class="social-icons margin-bottom-40">
                <!--<li><a href="#" data-original-title="facebook" class="facebook"></a></li>
                <li><a href="#" data-original-title="github" class="github"></a></li>
                <li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
                <li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
                <li><a href="#" data-original-title="rss" class="rss"></a></li>-->
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
<!--<script src="<?php echo base_url() ?>inc/frontend/pages/scripts/contact-us.js" type="text/javascript"></script>-->

<script type="text/javascript" src="<?php echo base_url() ?>inc/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>inc/global/plugins/jquery-validation/js/additional-methods.min.js"></script>

<script>
	var contactValidation = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation
            var form1 = $('#contact_form');
            //var error1 = $('.alert-danger', form1);
            //var success1 = $('.alert-success', form1);
			
			$.validator.addMethod("captchaRule", function(value, element, param) { 
				  return this.optional(element) || value === param; 
			}, "Hasil Salah");

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
                    },
					captcha: {
						required: true,
						captchaRule : '<?php echo $c; ?>'
					}
                },

                /*invalidHandler: function (event, validator) { //display error alert on form submit              
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
                }*/
            });


    }

</script>
<?php
	$map = isset($map)?$map:array();
	$name = isset($map[0]->name)?$map[0]->name:0;
	$desc_point = isset($map[0]->desc_point)?$map[0]->desc_point:0;
	$lat = isset($map[0]->lat)?$map[0]->lat:0;
	$lng = isset($map[0]->lng)?$map[0]->lng:0;
?>
<script>
	var ContactUs = function () {

		return {
			//main function to initiate the module
			init: function () {
				var map;
				$(document).ready(function(){
				  map = new GMaps({
					div: '#map',
					lat: <?php echo $lat ?>,
					lng: <?php echo $lng ?>,
				  });
				   var marker = map.addMarker({
						lat: <?php echo $lat ?>,
						lng: <?php echo $lng ?>,
						title: '<?php echo $name ?>',
						infoWindow: {
							content: "<?php echo $desc_point ?>"
						}
					});
	
				   marker.infoWindow.open(map, marker);
				});
			}
		};
	
	}();

</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        ContactUs.init();
		contactValidation();
    });
</script>


<!-- END PAGE LEVEL JAVASCRIPTS -->