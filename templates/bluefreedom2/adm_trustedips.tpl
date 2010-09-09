<h2>Trusted IPs</h2>

<table width="100%">
	<tr>
		<td>IP</td>
		<td>Aktion</td>
	</tr>
{foreach from=$trustedips item=ip}
	<tr>
		<td>{$ip}</td>
		<td><a href="adm_trustips.php?del={$ip}">l&ouml;schen</a></td>
	</tr>
{/foreach}
</table>

<h2>IP hinzuf&uuml;gen</h2>
<form action="adm_trustips.php" method="post">
	<table width="100%">
		<tr>
			<td>IP</td>
			<td><input type="text" name="ip" /></td>
		</tr>
	</table>
	<input type="submit" value="hinzuf&uuml;gen" />
</form>
