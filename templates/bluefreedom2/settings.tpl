<h2>{$menu_settings}</h2>
	
<form action="/settings.php" method="post">
	<table>
		<tr>
			<td>{$settings_realname}</td>
			<td><input type="text" name="realname" value="{$realname}" />
		</tr>

		<tr>
			<td>{$settings_vhost}</td>
			<td>{html_options name=vhost options=$vhosts selected=$vhost}
		</tr>

		<tr>
			<td>{$settings_server}</td>
			<td><input type="text" name="server" value="{$server}" />
		</tr>

		<tr>
			<td>{$settings_port}</td>
			<td><input type="text" name="port" value="{$port}" />
		</tr>

		<tr>
			<td>{$settings_ssl}</td>
			<td>{html_options name=ssl options=$values selected=$ssl}
		</tr>

		<tr>
			<td>{$settings_ipv6}</td>
			<td>{html_options name=ipv6 options=$values selected=$ipv6}
		</tr>

		<tr>
			<td>{$settings_awaynick}</td>
			<td><input type="text" name="awaynick" value="{$awaynick}" />
		</tr>

		<tr>
			<td>{$settings_away}</td>
			<td><input type="text" name="away" value="{$away}" />
		</tr>
	</table>
	<input type="submit" name="submit" value="{$settings_promt}" />
</form>
