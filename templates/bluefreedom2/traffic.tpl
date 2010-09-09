<h2>{$menu_traffic}</h2>
						
<table width="50%">
	<tr>
		<th></th>
		<th>IN</th>
		<th>Out</th>
	</tr>
	<tr>
		<th scope="row">Server</th>
		<td>{$traffic[0]|byte}</td>
		<td>{$traffic[1]|byte}</td>
	</tr>
	<tr>
		<th scope="row">User</th>
		<td>{$traffic[2]|byte}</td>
		<td>{$traffic[3]|byte}</td>
	</tr>
	<tr>
		<th scope="row">Total</th>
		<td>{math equation="x + y" x=$traffic[0] y=$traffic[2]}</td>
		<td>{math equation="x + y" x=$traffic[1] y=$traffic[3]}</td>
	</tr>
</table>
