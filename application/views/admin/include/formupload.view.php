<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url() ?>inc/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"/>
<link href="<?php echo base_url() ?>inc/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
<link href="<?php echo base_url() ?>inc/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE CONTENT-->
        <form id="UploadForm" action="<?php echo base_url() ?>upload/do_upload" method="POST" enctype="multipart/form-data">
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row fileupload-buttonbar">
                <div class="col-lg-12">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn green fileinput-button">
                    <i class="fa fa-plus"></i>
                    <span>
                    	Tambah Foto / <em>Add Photos</em>
                    </span>
                    <input type="file" name="userfile" multiple>
                    </span>
                    <button type="submit" class="btn blue start">
                    <i class="fa fa-upload"></i>
                    <span>
                    Mulai Unggah / <em>Start upload</em> 
                    </span>
                    </button>
                    <button type="reset" class="btn warning cancel">
                    <i class="fa fa-ban-circle"></i>
                    <span>
                    	Batalkan / <em>Cancel upload</em> 
                    </span>
                    </button>

                    <!-- The global file processing state -->
                    <span class="fileupload-process">
                    </span>
                </div>
                <!-- The global progress information -->
                <div class="col-lg-5 fileupload-progress fade">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-success" style="width:0%;">
                        </div>
                    </div>
                    <!-- The extended global progress information -->
                    <div class="progress-extended">
                         &nbsp;
                    </div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role="presentation" class="table table-striped clearfix" id="TblUploadImage">
            <thead>
            	<tr>
                	<th>Foto / Photo</th><th>Nama File / File Name</th>
                    <th>Ukuran File / File Size</th><th>Aksi / Action</th>
                </tr>
            </thead>
            <tbody class="files">
            </tbody>
            </table>
        </form>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Catatan / <em>Notes</em></h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>
                    		Ukuran Foto Maksimum <strong><?php echo isset($filesize_caption)?$filesize_caption:"5MB" ?></strong> / 
                         	<em>The maximum file size for uploads is <strong><?php echo isset($filesize_caption)?$filesize_caption:"5MB" ?></strong></em>.
                    </li>
                    <li>
                    	 	Tipe Foto yang diperbolehkan(<strong><?php echo isset($filetype_caption)?$filetype_caption:"5MB" ?></strong>) /
                        	<em>Only image files (<strong><?php echo isset($filetype_caption)?$filetype_caption:"5MB" ?></strong>) are allowed</em>.
                    </li>
                </ul>
            </div>
        </div>


<!-- END PAGE CONTENT-->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
			
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger label label-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
            </div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn blue start" disabled>
                    <i class="fa fa-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn red cancel">
                    <i class="fa fa-ban"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
	{% for (var i=0, file; file=o.files[i]; i++) { %}
		<tr class="template-download fade">
			<td>
				<span class="preview">
					{% if (file.thumbnailUrl) { %}
						<input type="checkbox" value="{%=file.name%}" class="SelectFileName" />
						<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
					{% } %}
				</span>
			</td>
			<td>
				<p class="name">
					{% if (file.url) { %}
						<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
					{% } else { %}
						<span>{%=file.name%}</span>
					{% } %}
				</p>
				{% if (file.error) { %}
					<div><span class="label label-danger">Error</span> {%=file.error%}</div>
				{% } %}
			</td>
			<td>
				<span class="size">{%=o.formatFileSize(file.size)%}</span>
			</td>
			<td>
				{% if (file.deleteUrl) { %}
					
				{% } else { %}
					<button class="btn yellow cancel btn-sm">
						<i class="fa fa-ban"></i>
						<span>Cancel</span>
					</button>
				{% } %}
			</td>
		</tr>
	{% } %}
</script>


<script>
	// Initialize the jQuery File Upload widget:
	$('#UploadForm').fileupload({
		disableImageResize: false,
		autoUpload: false,
		disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
		maxFileSize: 5000000,
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
		// Uncomment the following to send cross-domain cookies:
		//xhrFields: {withCredentials: true},                
	});

	// Enable iframe cross-domain access via redirect option:
	$('#UploadForm').fileupload(
		'option',
		'redirect',
		window.location.href.replace(
			/\/[^\/]*$/,
			'/cors/result.html?%s'
		)
	);

	// Upload server status check for browsers with CORS support:
	if ($.support.cors) {
		$.ajax({
			type: 'HEAD'
		}).fail(function () {
			$('<div class="alert alert-danger"/>')
				.text('Upload server currently unavailable - ' +
						new Date())
				.appendTo('#UploadForm');
		});
	}

	/*// Load & display existing files:
	$('#UploadForm').addClass('fileupload-processing');
	$.ajax({
		// Uncomment the following to send cross-domain cookies:
		//xhrFields: {withCredentials: true},
		url: $('#UploadForm').attr("action"),
		dataType: 'json',
		context: $('#UploadForm')[0]
	}).always(function () {
		$(this).removeClass('fileupload-processing');
	}).done(function (result) {
		$(this).fileupload('option', 'done')
		.call(this, $.Event('done'), {result: result});
		$(".SelectFileName").click(function(e) {
			var filename =  $("#filename").val();
			//alert(filename)
			filename = filename + "<;>" + $(this).val();
			$("#filename").val(filename);
		});  
	});*/
</script>

