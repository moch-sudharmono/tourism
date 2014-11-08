<link href="<?php echo base_url()?>inc/global/css/uploadfile.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo base_url()?>inc/global/scripts/jquery.uploadfile.min.js"></script>


<div id="mulitplefileuploader">Upload</div>

<div id="status"></div>

<script>
$(document).ready(function()
{
var settings = {
    url: "<?php echo base_url() ?>upload/do_upload",
    dragDrop:true,
    fileName: "userfile",
	maxFileSize:1024*100,
	maxFileCount:1,
    allowedTypes:"jpg,png,gif",	
    returnType:"json",
	 onSuccess:function(files,data,xhr)
    {
        $("#status").append("<font color='green'>Upload is success</font>");
 
    },
    onError: function(files,status,errMsg)
    {       
        $("#status").append("<font color='red'>Upload is Failed</font>");
    },
    showDelete:false,
	showDone:false,
    deleteCallback: function(data,pd)
	{
    for(var i=0;i<data.length;i++)
    {
        $.post("<?php echo base_url() ?>upload/deleteImage",{op:"delete",name:data[i]},
        function(resp, textStatus, jqXHR)
        {
			alert(data[i]);
            //Show Message  $("#status").append("<div>File Deleted</div>"); 
            $("#status").append("<font color='green'>File Deleted</font>");     
        });
     }      
    pd.statusbar.hide(); //You choice to hide/not.

}
}

var uploadObj = $("#mulitplefileuploader").uploadFile(settings);


});
</script>