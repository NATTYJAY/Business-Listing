<script>
$(document).ready(function(){
	 e17="";

	 vision= $('textarea[name="vision"]');
    mission= $('textarea[name="mission"]');
    values= $('textarea[name="value"]');
    r_id = $("input[id='r_id']");
     
	pic = $("input[id='pics']");
	e17_pp = $("#pixmix");
	picture = $("#imgp");
    
	button = $("input[id='butt']");
	 
	
	validatestu()
	
	
});

		

	function validatestu(){
		
		
			var fdata = new FormData();

	function image_preview(){
		pd = new FormData();
		pd.append("tmp_pic", pic[0].files[0]);
		$.ajax({
              url: './pages/preview.php',
              data: pd,
              processData: false,
              contentType: false,
              type: 'POST',
              success: function(response){
					if (response == 1){
						pic.css("border", "1px solid #F00");
						e17 = "Selected file not valid, only .jpg type is allowed"
						e17_pp.html("<p>"+e17+"</p>");
						
					}else{
						 pic.css("border", "1px solid #8edd88");
                        e17_pp.html("");
                        picture.html("");
                        picture.css("background-image", "none");
                        picture.html(response); 				
					}

              }     
			});	
	}//close preview.
	
					function check_preview(){
                      if (!pic.val()){
                              pic.css("border", "1px solid #F00");
							  e17= "please browse and select your image"
							  e17_pp.html("<p>"+e17+"</p>");
                              e17_pp.css("color","#F00");
                               
                              
                            }else{
                              pic.css("border", "1px solid #8edd88");
							  e17="";
                              e17_pp.html("");
                             
                              
                            }
                     }
					  
					  
	function senda(){
				all_send = new FormData();
				
				
				all_send.append("joe", "boy");
				all_send.append("vision", vision.val());
				all_send.append("mission", mission.val());
				all_send.append("values", values.val());
				all_send.append("r_id", r_id.val());
				all_send.append("passport", pic[0].files[0]);
				
		
		
		$.ajax({
              url: './pages/insert.php',
              data: all_send,
              processData: false,
              contentType: false,
			  cache:false,
              type: 'POST',
              success: function(data){
					$("#subm").trigger("reset");
              	$("#okay").html(data);
					function val(){
					$("#okay").fadeOut('slow');
					$('#edit').modal('hide');
				    }
				setTimeout(val,1000);
              }

        });
		
		
	}
	
	pic.on("change",image_preview);
	
	button.on("click", function(){
		
		
		check_preview();
		
		
		if (e17==""){
			
			senda();
			
		}			
	});// close button
	
	
		}//close validatestu


</script>

<script>
 $(document).ready(function(){
	$(document).on('click', '.delete_data', function(){
		 r_id = $(this).attr("id");
		 
			$.ajax({
				url:"./pages/fetch.php",
				method:"POST",
				data:{
					itiswell  : "getnow",

					getcus : r_id },
				dataType:"json",
				success: function(data){

					
					$('#senda').val(data.cname);
					$('#cos_id').val(data.r_id);
					$('#subsitu').val("Send Message");
					$('#delete_course').modal('show');
				}
				});


		});
	
	
});
 </script>


  <script>
$(document).ready(function(){
	
	
	 sender= $("input[id='senda']");
    subject= $("input[id='subject']");  
    message= $('textarea[name="message"]');    
	re_id = $("input[id='cos_id']");
	
	button = $("input[id='subsitu']");
	
	
	button.on("click",cusoop);
});
	
	function cusoop(){
		
		$.ajax({
              url: './pages/sendmessage.php',
              data:{
				   no 	: "yes",
				  sender : sender.val(),
				  subject : subject.val(),
				  message : message.val(),
				  re_id :	re_id.val(),
				  },
              type: 'POST',
              success: function(data){
				  $("#datano").html(data);
              }
         });
		
	};
	
</script>


<script>
 $(document).ready(function(){
	$(document).on('click', '.message_data', function(){
		 rx_id = $(this).attr("id");

		 $('#dynamic-content').html('');
		 $('#modal-loader').show(); 
			$.ajax({
				url:"./pages/getuser.php",
				method:"POST",
				data:{
					modal  : "ye",
					id : rx_id },
				
				success: function(data){
					$('#dynamic-content').html(''); 
					$('#dynamic-content').html(data);
					$('#message_send').modal('show');
					$('#modal-loader').hide();
				}
				});


		});
	
	
});
 </script>

 <script>
 $(document).ready(function(){
	$(document).on('click', '.sent_data', function(){
		 send_id = $(this).attr("id");

		 $('#dynamic-content').html('');
		 $('#modal-loader').show(); 
			$.ajax({
				url:"./pages/send.php",
				method:"POST",
				data:{
					send  : "ya",
					id : send_id },
				
				success: function(data){
					$('#dynamic-contents').html(''); 
					$('#dynamic-contents').html(data);
					$('#send_message').modal('show');
					$('#modal-loader').hide();
				}
				});


		});
	
	
});
 </script>


