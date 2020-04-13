<?php
$username="";
$password="";
if($parameter=='ubah' && $username!=''){
    $this->db->where('username',$id);
    $row=$this->Model->get()->row_array();
    extract($row);
}
?>
<?=content_open('Form Login')?>
    <form method="post" action="<?=site_url($url.'/simpan')?>" enctype="multipart/form-data">
        <?=input_hidden('parameter',$parameter)?>
        <?=input_hidden('username',$username)?>
        <div class="form-group">
            <label>password</label>
            <div class="row">
                <div class="col-md-4">
                    <?=input_text('password',$password)?>
                </div>
            </div>
        </div>
        
<?=content_close()?>