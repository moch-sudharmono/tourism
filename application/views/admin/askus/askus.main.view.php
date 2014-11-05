<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i>Tanya Kami / <em>Ask Us</em> Data
        </div>
        <div class="tools">
            
        </div>
    </div>
    <div class="portlet-body">
        
        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
        <thead>

        <tr>
            <th>
                 Surel Pengirim / <em>Email Sender</em>
            </th>
            <th>
                 Pertanyaan / <em>Question</em>
            </th>
            <th>
                 Aksi / <em>Action</em>
            </th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $askus = (isset($askus)?$askus:array());
        foreach($askus as $value){
        ?>
        <tr>
            <td>
                 <?php echo $value->email; ?>
            </td>
            <td>
                 <?php echo $value->pertanyaan; ?>
            </td>
            <td>
                <?php if($value->jawaban == '' || $value->jawaban == null){ ?>
                <a href="<?php echo base_url() ?>admin/askus/form/<?php echo $value->id_tanya_kami ?>" class="label label-sm label-warning Answer">
                	Belum Dijawab / <em>Waiting for Answer</em>
                </a>
                <?php }else{ ?>
                <a href="<?php echo base_url() ?>admin/askus/form/<?php echo $value->id_tanya_kami ?>" class="label label-sm label-success">
                	Telah Dijawab / <em>Answered</em> 
                </a>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->