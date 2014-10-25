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
              <form action="#" role="form">
                <div class="form-group">
                  <label for="contacts-email">Alamat Surel / <em>Email</em></label>
                  <input type="email" class="form-control" id="contacts-email">
                </div>
                <div class="form-group">
                  <label for="contacts-message">Pertanyaan / <em>Message</em></label>
                  <textarea class="form-control" rows="5" id="contacts-message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Send</button>
                <button type="button" class="btn btn-default">Cancel</button>
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
<script type="text/javascript">
    jQuery(document).ready(function() {
        ContactUs.init();
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->