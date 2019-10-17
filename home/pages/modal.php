
<?php
@include('../../library/db.php');
@include('../../library/functions.php');
include'jquery.php';
  


if(isset($_SESSION["usr_id"])){
  $deptid = $_SESSION["usr_id"];
  }

?>

<!-- ***********************************************************************************************-->
<div class="modal fade" tabindex="-1" role="dialog" id="edit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit <?php if(isset($_SESSION["cname"])){echo $_SESSION["cname"];}?> Profile Here</h4>
      </div>
      <div class="modal-body">
       <div class="well">
     
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <form name="joeboy" id="subm" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                  <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                  
                   <label for="firstname">Mission Statement</label>
                    <div class="input-group">

                        <span class="input-group-addon rose" ><i class="fa fa-male"></i></span>
                       <textarea rows="3" name="mission"> </textarea>

                    </div>
                     <label class="control-label col-xs-offset-0" for="first-name" id="ef">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                  
                    <label for="firstname">Vision Statment</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-th-large"></i></span>
                         <textarea rows="3" name="vision"></textarea>
                    </div>
                    <label class="control-label col-xs-offset-0" for="last-name" id="eya">
                    </div>
                  </div>

                  <div class="form-group">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="firstname">Core Values</label>
                      <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                        <textarea rows="3" name="value"></textarea>
                    </div>
                    <label class="control-label col-xs-offset-0" for="regno" id="erg">
                    </div>
                  </div>
                 
                   <div class="form-group" hidden="">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    
                      <div class="input-group" hidden="">
                       <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                       <input type="text" name = "dept_id" class="form-control" id="r_id" placeholder="dept_id" value="<?php if(isset($_SESSION["usr_id"])){echo $_SESSION["usr_id"];}?>" readonly="readonly" required>
                    </div>
<label class="control-label col-xs-offset-0" for="last-name" id="essssss">                    </div>
                  </div>
                  
                   <div class="form-group">
              
              <div class="col-md-8 col-sm-8 col-xs-8">
                  
                    <label for="upload">Upload Image Here</label>
                    <div class="input-group">
                        
                       <input type="file" id="pics" name="pix" required >

                    </div>
                     <label class="control-label col-xs-offset-0" for="first-name" id="pixmix">
                    </div>
                    
                     <div class="col-md-4 col-sm-4 col-xs-4">
                      <div id ="imgp">
                      </div>

                   
                     
                    </div>
                    </div>
                    
                 
     <div class="col-md-12 col-sm-12 col-xs-12">
         <br/>
         
                 <input type="button" name="submito" value="Submit" id="butt" class="btn btn-default" /> <label id="yes"> 
                  
                   <label class="control-label col-xs-offset-0" for="last-name" id="okay">
</div>
                  
                  
              </form>
      
    
                
                
              
            
            </div>
            
        
        
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn btn-sm-warning" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- add priviledge modal here na-->


<!-- ****************************MODAL TO VIEW PROFILE IS HERE***************************-->
<div class="modal fade" tabindex="-1" role="dialog" id="edit1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit <?php if(isset($_SESSION["cname"])){echo $_SESSION["cname"];}?> Profile Here</h4>
      </div>
      <div class="modal-body">
       <div class="well">
     
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <form name="joeboy" id="subm" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                  <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                  
                   <label for="firstname">Mission Statement</label>
                    <div class="input-group">

                        <span class="input-group-addon rose" ><i class="fa fa-male"></i></span>
                       <textarea rows="3" name="mission"> </textarea>

                    </div>
                     <label class="control-label col-xs-offset-0" for="first-name" id="ef">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                  
                    <label for="firstname">Vision Statment</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-th-large"></i></span>
                         <textarea rows="3" name="vision"></textarea>
                    </div>
                    <label class="control-label col-xs-offset-0" for="last-name" id="eya">
                    </div>
                  </div>

                  <div class="form-group">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="firstname">Core Values</label>
                      <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                        <textarea rows="3" name="value"></textarea>
                    </div>
                    <label class="control-label col-xs-offset-0" for="regno" id="erg">
                    </div>
                  </div>
                 
                   <div class="form-group">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    
                      <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                       <input type="text" name = "dept_id" class="form-control" id="r_id" placeholder="dept_id" value="<?php if(isset($_SESSION["usr_id"])){echo $_SESSION["usr_id"];}?>" readonly="readonly" required>
                    </div>
<label class="control-label col-xs-offset-0" for="last-name" id="essssss">                    </div>
                  </div>
                  
                   <div class="form-group">
              
              <div class="col-md-8 col-sm-8 col-xs-8">
                  
                    <label for="upload">Upload Image Here</label>
                    <div class="input-group">
                        
                       <input type="file" id="pics" name="pix" required >

                    </div>
                     <label class="control-label col-xs-offset-0" for="first-name" id="pixmix">
                    </div>
                    
                     <div class="col-md-4 col-sm-4 col-xs-4">
                      <div id ="imgp">
                      </div>

                   
                     
                    </div>
                    </div>
                    
                 
     <div class="col-md-12 col-sm-12 col-xs-12">
         <br/>
         
                 <input type="button" name="submito" value="Submit" id="butt" class="btn btn-default" /> <label id="yes"> 
                  
                   <label class="control-label col-xs-offset-0" for="last-name" id="okay">
</div>
                  
                  
              </form>
      
    
                
                
              
            
            </div>
            
        
        
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn btn-sm-warning" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- add priviledge modal here na-->