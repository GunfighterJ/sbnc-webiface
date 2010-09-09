<h2>{$menu_login}</h2>
<form name="login" action="{$path}login.php" method="post">
	<table width="80%">
		<tr>
			<td>{$login_user}</td>
			<td><input type="text" name="sbnc_user" maxlength="10" /></td>
		</tr>
		<tr>
			<td>{$login_pass}</td>
			<td><input type="password" name="sbnc_pass" /></td>
		</tr>
	</table>
	<input type="submit" value="{$login_promt}">
</form>
