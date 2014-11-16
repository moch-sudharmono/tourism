<?php
	$email = isset($email)?$email:array();
	$data = isset($email[0])?$email[0]:array();
	
	$id_email_configuration = isset($data->id_email_configuration)?$data->id_email_configuration:"";
	$email_from = isset($data->email_from)?$data->email_from:"";
	$protocol = isset($data->protocol)?$data->protocol:"";
	$smtp_host = isset($data->smtp_host)?$data->smtp_host:"";
	$smtp_port = isset($data->smtp_port)?$data->smtp_port:"";
	$smtp_timeout = isset($data->smtp_timeout)?$data->smtp_timeout:"";
	$smtp_user = isset($data->smtp_user)?$data->smtp_user:"";
	$smtp_pass = isset($data->smtp_pass)?$data->smtp_pass:"";
	$charset = isset($data->charset)?$data->charset:"";
	$newline = isset($data->newline)?$data->newline:"";
	$mailtype = isset($data->mailtype)?$data->mailtype:"";
	
?>
<div class="row">
<div class="col-md-8">
<!-- BEGIN VALIDATION STATES-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-wrench"></i>Form Konfigurasi Email / <em>Email Configuration Form</em>
        </div>							
    </div>
    
    <div class="portlet-body form">
        <form role="form" method="post" class="form-horizontal" id="form_news_tag" action="<?php echo base_url() ?>admin/email_configuration/save">
            <input type="hidden" name="id_email_configuration" value="<?php echo $id_email_configuration ?>" />
            
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Email From</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="email_from" value="<?php echo $email_from ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Protocol</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="protocol" value="<?php echo $protocol ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">SMTP Host</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="smtp_host" value="<?php echo $smtp_host ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">SMTP Port</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="smtp_port" value="<?php echo $smtp_port ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">SMTP Timeout</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="smtp_timeout" value="<?php echo $smtp_timeout ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">SMTP User</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="smtp_user" value="<?php echo $smtp_user ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">SMTP Password</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="smtp_pass" value="<?php echo $smtp_pass ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Charset</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="charset" value="<?php echo $charset ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Mail Type</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="mailtype" value="<?php echo $mailtype ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">New Line</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="newline" value="<?php echo $newline ?>">
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-12">
                        <button type="submit" class="btn blue">Simpan / Save</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
    <!-- END VALIDATION STATES-->
</div>
</div>
</div>
<script>
	$( "#form_news_tag" ).validate({
	  rules: {
		 tag_ina: {
			required: true
		},tag_eng: {
			required: true
		}
	  }
	});

</script>