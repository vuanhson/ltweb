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
        <td><label><?php echo $u->user_name?></label></td>
        <td>
    		<input type="submit" name="Edit" onclick="editFunction();" value="Edit">
    	</td>
    	<td>
    		<input type="submit" name="Delete" onclick="delFunction();" value="Delete">
    	</td>
    </tr>
<?php
}
?>
</table>