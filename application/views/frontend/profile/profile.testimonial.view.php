<style>
	.testimonial { border:1px solid silver; min-height:30px; max-height:200px; overflow:auto; }
</style>
<div class="main">
  <div class="container">
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12">

        <div class="content-page">
        <div class="row">
        	<ul class="nav sidebar-categories margin-bottom-20">
        	<?php if(isset($testimoni) and !empty($testimoni)):
				 		foreach($testimoni as $tst):
			?>
            <li>
            	<?php echo $tst->testimoni ?> (<?php echo TglIndo($tst->tanggal_testimoni)?>)                                 
            </li>         
            <?php
				endforeach;
				endif;
			?>
            </ul>
        </div>
        
          <div class="row">

            <div class="col-md-9 col-sm-9">
                            
              <form action="<?php echo base_url() ?>frontend/profile/send" role="form" id="testimonial_form" method="post">
                <div class="form-group">
                	<input type="hidden" name="id_lokasi_wisata" value="<?php echo $this->uri->segment(4) ?>" />
					<textarea id="testimonial" name="testimonial" class="testimonial" rows="5" cols="100%" contenteditable=""></textarea>
                </div>
                <div class="form-group">
                	<?php
						$a = rand(1,9);
						$b = rand(1,9);
						$c = $a + $b;
					?>
                  <label for="contacts-captcha">Captcha : Hasil Penjumlahan <?php echo $a.' + '.$b ?></label>
                  <input type="captcha" id="captcha" class="form-control" width='10' name="captcha">
                </div>
                <div class="form-group" align="right">
	                <input type="submit" value="Kirim / Submit" class="btn blue validasi" />
              	</div>
              </form>
              <!-- END FORM-->
            </div>

            
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
  </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function() {
		//testimonialValidation();
		
		$('.validasi').click(function(e){
			var captcha = $('#captcha').val();
			var testimonial = $('#testimonial').val();
			if(testimonial == ''){ 
				alert("Testimonial tidak boleh kosong");
				return false;
			}
			if(captcha != <?php echo $c ?>)
			{
				alert("Hasil yang anda masukkan salah");	
				return false;
			}	
		});
    });
</script>
<script>
	var testimonialValidation = function() {
            var form1 = $('#testimonial_form');
            
			$.validator.addMethod("captchaRule", function(value, element, param) { 
				  return this.optional(element) || value === param; 
			}, "Hasil Salah");
			
			alert(form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {
                    
                },
                rules: {
                    testimonial: {
                        minlength: 10,
						maxlength: 400,
                        required: true
                    },                    
					captcha: {
						required: true,
						captchaRule : '<?php echo $c; ?>'
					}
                },

               
            });


    }

</script>