<h2>{$index_welcome|replace:'{nickname}':$nick}</h2>
{$index_nick|replace:'{nickname}':$nick}
{$index_server|replace:'{server}':$server}
{$index_uptime|replace:'{uptime}':$uptime}

<h2>{$index_channels}</h2>
<ul>
	{foreach from=$channels item=channel}
	<li>{$channel}</li>
	{/foreach}
</ul>