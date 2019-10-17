	
<div  id="delete_cat<?php echo $row['c_id'];?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
			<div class="alert alert-default" style="color:red;">Are you Sure you want to Delete <br><span style="font-weight:bold; font-size:14px;"><b><?php echo $row['cat_name'];?></b></span><br> from the list of category?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete.php?cc_id=<?php echo $row['c_id'];?>">Yes</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>

    </div>
    </div>
    </div>
	
