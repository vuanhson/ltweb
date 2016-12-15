<script type="text/javascript">
    function editFunction(){
		alert("Edit button was pressed");
	};
	function delFunction(){
		alert("You will delete this account");
	};
</script>
<table>
<?php
foreach ($users as $u){
?>
    <tr>
        <td><label><a href="<?php echo base_url() ?>index.php/adminpage/showpost/<?php echo $u->user_id?>"> <?php echo $u->user_name?> </a></label>

        </td>
        <td>
    		<input type="submit" name="Edit" onclick="editFunction();" value="Edit">
    	</td>
    	<td>
    		<input type="submit" name="Delete" onclick="delFunction();" value="Delete">
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
