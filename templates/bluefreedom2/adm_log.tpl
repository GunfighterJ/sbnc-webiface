<h2>{$menu_log}</h2>

{if $deleted}
	{$log_erased}
{else}
	<form action="/adm_log.php" method="post">
		<input name="erase" type="submit" value="{$log_promt}">
	</form>
{/if}

{foreach from=$log item=line}
	<p>{$line}</p>
{/foreach}
