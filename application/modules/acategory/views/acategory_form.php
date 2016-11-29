<div class="modal-dialog">
        
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title"> Tambah Kode Rekening </h4>
</div>
<div class="modal-body">
 
 <!-- error div -->
 <div class="alert alert-success success"> </div>
 <div class="alert alert-warning warning"> </div>
 <div class="alert alert-error error"> </div>
 
 <!-- form add -->
<div class="x_panel" >
<div class="x_title">
  
  <div class="clearfix"></div> 
</div>
<div class="x_content">

<form id="upload_form_non" data-parsley-validate class="form-horizontal form-label-left" method="POST" 
action="<?php echo $form_action; ?>" enctype="multipart/form-data">
     
     
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Kode </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="tcode" class="form-control col-md-7 col-xs-12" type="text" name="tcode" required placeholder="Kode Rekening">
      </div>
    </div> 
     
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Nama </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="tname" class="form-control col-md-7 col-xs-12" type="text" name="tname" required placeholder="Nama Rekening">
      </div>
    </div>
    
    <div class="form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Kategori Rekening <span class="required">*</span></label>
       <div class="col-md-6 col-sm-6 col-xs-12">
           
           <?php $js = "class='select2_single form-control' id='cparent' tabindex='-1' style='width:100%;' "; 
		        echo form_dropdown('cparent', $parent, isset($default['parent']) ? $default['parent'] : '', $js); ?>
       </div>
    </div>
    
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Urutan </label>
      <div class="col-md-2 col-sm-2 col-xs-12">
        <input id="torder" class="form-control col-md-7 col-xs-12" type="number" name="torder" required placeholder="Order">
      </div>
    </div>
    
     <div class="form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ctype"> Jenis Kategori <span class="required">*</span></label>
       <div class="col-md-6 col-sm-6 col-xs-12">
           
           <select name="ctype" id="ctype" class="form-control col-md-7 col-xs-12" style="width:100%;">
               <option value="1"> BIAYA LANGSUNG </option>
               <option value="2"> BIAYA TIDAK LANGSUNG </option>
               <option value="3"> PEMBIAYAAN DAERAH </option>
           </select>
           
       </div>
    </div>
    
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Keterangan </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea name="tdesc" id="tdesc" cols="30" rows="3" class="form-control"></textarea>
      </div>
    </div>
    


      <div class="ln_solid"></div>
      <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <button type="submit" class="btn btn-primary" id="button">Save</button>
          <button type="button" id="bclose" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" id="breset" class="btn btn-warning">Reset</button>
          </div>
      </div>
  </form> 

</div>
</div>
<!-- form add -->

</div>
    <div class="modal-footer"> </div>
</div>
  
</div>