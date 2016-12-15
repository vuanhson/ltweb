<script type="text/javascript">
    function editFunction(){
		alert("Edit button was pressed");
	};
	$(document).ready(function() {
        //##### Send delete Ajax request to response.php #########
        $(".delete_user_lnk").click(function(e) {
            e.preventDefault();
            var userid = $(this).attr('id');

            //$('#post_'+postid).hide(); //change background of this element by adding class


            jQuery.ajax({
                type: "POST", // HTTP method POST or GET
                url: "<?php echo base_url() ?>index.php/adminpage/delete_user", //Where to make Ajax calls
                dataType:"text", // Data type, HTML, json etc.
                data:{user_id:$(this).attr('id')}, //Form variables
                success:function(response){
                    //on success, hide  element user wants to delete.
                    $('#row'+userid).fadeOut();
                },
                error:function (xhr, ajaxOptions, thrownError){
                    //On error, we alert user
                    alert(thrownError);
                }
            });
        });
        //  $(".edit_user_lnk").click(function(e) {
        //      e.preventDefault();
        //      var userid = $(this).attr('id');
        //      alert(userid);
        //      //$('#post_'+postid).hide(); //change background of this element by adding class

        //      // alert("hsjk");
        //      jQuery.ajax({
        //          type: "POST", // HTTP method POST or GET
        //          url: "<?php echo base_url() ?>index.php/adminpage/edit_user", //Where to make Ajax calls
        //          dataType:"text", // Data type, HTML, json etc.
        //          data:{user_id:$(this).attr('id')}, //Form variables
        //          success: function(response) {
                    
        //          },
        //          error:function (xhr, ajaxOptions, thrownError){
        //              //On error, we alert user
        //              alert(thrownError);
        //          }
        //      });
        // });
    });
</script>
<table>
<?php
foreach ($users as $u){
?>
<<<<<<< HEAD
    <tr>
        <td><label><a href="<?php echo base_url() ?>index.php/adminpage/showpost/<?php echo $u->user_id?>"> <?php echo $u->user_name?> </a></label>

        </td>
=======
    <tr id="row<?php echo $u->user_id?>">
        <td><label><?php echo $u->user_name?></label></td>
>>>>>>> 68ada5c6edb7c4114d768ec80897738a8ae8c5e2
        <td>
    		<div id="<?php echo $u->user_id; ?>" class="edit_user_lnk"><a href="<?php echo base_url() ?>index.php/adminpage/edit_user/<?php echo $u->user_id ?>" >Edit</a></div>
    	</td>
    	<td>
    		<button id="<?php echo $u->user_id; ?>" class="delete_user_lnk"><a href="#">Delete</a></button>
    	</td>
        <!--
        <td>
            <a href="<?php echo base_url() ?>index.php/adminpage/showpost/<?php echo $u->user_id?>"> <?php echo $u->user_name?> </a>
            <input type="submit" name="<?php echo $u->user_id ?>" value="Viewpost"> 
           
        </td>
        -->
    </tr>
<?php
}
?>
</table>
