<!-- BEGIN TOP BAR -->
<div class="pre-header">
    <div class="container">
        <div class="row">
            <!-- BEGIN TOP BAR LEFT PART -->
            <div class="col-md-6 col-sm-6 additional-shop-info">
                <ul class="list-unstyled list-inline">
                    <li><i class="fa fa-phone"></i><span><?php echo getPhone() ?></span></li>
                    <li><i class="fa fa-envelope-o"></i><span><?php echo getEmail() ?></span></li>
                </ul>
            </div>
            <!-- END TOP BAR LEFT PART -->
            <!-- BEGIN TOP BAR MENU -->
            <div class="col-md-6 col-sm-6 additional-nav">
                <ul class="list-unstyled list-inline pull-right">
                    <li><a href="<?php echo base_url() ?>frontend/language/setlanguage/eng?url=<?php echo urlencode(current_url()) ?>">English</a></li>
                    <li><a href="<?php echo base_url() ?>frontend/language/setlanguage/ina?url=<?php echo urlencode(current_url()) ?>">Bahasa</a></li>
                </ul>
            </div>
            <!-- END TOP BAR MENU -->
        </div>
    </div>        
</div>
<!-- END TOP BAR -->