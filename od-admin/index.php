<?php require_once $_SERVER['DOCUMENT_ROOT']."/od-admin/tpl/header.tpl"; ?>

<div class='wrapper'>
	<div id='conent'>
	
		<div id='ent'>
		
			<form action='summer.php' method='post'>
			
				<table>
					<tr>
						<td>email</td><td><input type="text" value="" name="email"/></td>
						<td>password></td><input type="password" value="" name="pass"/></td>
					</tr>
					
					<tr>
						<td><input type="submit" name="submit" value="enter" /></td><td>&nbsp;</td>
					</tr>
				</table>
			
			</form>
		
		</div>
	
	</div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT']."/od-admin/tpl/footer.tpl"; ?>

