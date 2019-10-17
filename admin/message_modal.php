<div  id="index.php?page=message#message<?php echo $row['r_id'];?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="alert alert-default" style="color:red;">Are you Sure you want to Delete <br><span style="font-weight:bold; font-size:14px;"><b><?php echo $row['cname'];?></b></span><br> from the list of category?<br> <i>This might cause a slight change in the system. Bewarned !. Thank You</i></div>

    </div>
    <div class="modal-footer">
      <a class="btn btn-danger" href="delete_user.php?c_id=<?php echo $row['c_id'];?>&r_id=<?php echo $row['r_id'];?>">Yes</a>
      <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
    </div>
    </div>

    </div>
    </div>
    </div>
  
