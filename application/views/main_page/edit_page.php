<script type="text/javascript">
	$(document).ready(function() {
        //##### Send delete Ajax request to response.php #########
        $(".update_user_lnk").click(function(e) {
            e.preventDefault();
            var userid = $(this).attr('id');

            //$('#post_'+postid).hide(); //change background of this element by adding class


            jQuery.ajax({
                type: "POST", // HTTP method POST or GET
                url: "<?php echo base_url() ?>index.php/adminpage/update_user", //Where to make Ajax calls
                dataType:"text", // Data type, HTML, json etc.
                data:{
                user_id:$(this).attr('id'),
                user_name:$(this).attr('username'),
                password:$(this).attr('password'),
                email:$(this).attr('email')
                }, //Form variables
                success:function(response){
                    //on success, hide  element user wants to delete.
             		alert('Update Done.');
                },
                error:function (xhr, ajaxOptions, thrownError){
                    //On error, we alert user
                    alert(thrownError);
                }
            });
        });
    });
</script>	
<?php
	foreach ($users as $user) {
		# code...
?>
<form methed="post">
<table>
	<tr>
		<td>UserName: </td>
		<td><input name="username" type="text" value="<?php echo $user->user_name ?>"></td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input name="password" type="text" value="<?php echo $user->password ?>"></td>
	</tr>
	<tr>
		<td>Email: </td>
		<td><input name="email" type="text" value="<?php echo $user->email ?>"></td>
	</tr>
	<tr>
		<td><a href="<?php echo base_url() ?>index.php/adminpage/home" >Back</a></td>
		<td><button id="<?php echo $user->user_id; ?>" class="update_user_lnk"><a type="submit" href="#">Update</a></button></td>
	</tr>
</table>
<?php
}
?>
</form>