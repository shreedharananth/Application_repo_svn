
	Affiliates |
	<a href="/BevoMedia/Admin/BlacklistAdvertisers.html">Advertisers</a>

	<br /><br />
	
	<h2>Blacklist Affiliates</h2>
	
	<table width="100%">
		<tr>
			<td>Name</td>
			<td>Posted by</td>
			<td>Created</td>
		</tr>
		
	<?php 
		foreach ($this->Posts as $Post)
		{
	?>
		<tr>
			<td>
				<a href="/BevoMedia/Admin/ViewAffiliatePost.html?ID=<?=$Post->ID?>"><?=$Post->Name?></a>
			</td>
			<td><?=$Post->NetworkName?></td>
			<td><?=date('m/d/Y H:i a', strtotime($Post->Created))?></td>
		</tr>
	<?php 
		}

		if (count($this->Posts)==0)
		{
	?>
		<tr>
			<td colspan="3" align="center">
				No records found.
			</td>
		</tr>
	<?php 
		}
	?>
		
	</table>