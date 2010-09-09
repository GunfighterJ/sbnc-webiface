<h2>vHosts</h2>
<table width="100%">
	<tr>
		<td>IP</td>
		<td>benutzt</td>
		<td>limit</td>
		<td>vHost</td>
		<td>Aktion</td>
	</tr>
{foreach from=$vhosts item=vhost}
	<tr>
		<td>{$vhost[0]}</td>
		<td>{$vhost[1]}</td>
		<td>{$vhost[2]}</td>
		<td>{$vhost[3]}</td>
		<td><a href="adm_vhosts.php?del={$vhost[0]}">l&ouml;schen</a></td>
	</tr>
{/foreach}
</table>

<h2>vHost hinzuf&uuml;gen</h2>
<form action="adm_vhosts.php" method="post">
	<table width="100%">
		<tr>
			<td>IP</td>
			<td><input type="text" name="ip" /></td>
		</tr>
		<tr>
			<td>Limit</td>
			<td><input type="text" name="limit" /></td>
		</tr>
		<tr>
			<td>Host</td>
			<td><input type="text" name="host" /></td>
		</tr>
	</table>
	<input type="submit" value="hinzuf&uuml;gen" />
</form>
