<?php 
?>
	<div class="pagespages">
<? $pages_unformated =  ceil($all_results[1] /8) + 1;
for($i= 1; $i<$pages_unformated;$i++)
{
	$actual = $i - 1;
	echo "<a class='page_button' href='$actual'" . ">" . $i . "</a>";
	if($i <$pages_unformated-1)
	{
		echo  " | ";
	}
}

	?></div><table><?
	foreach ($all_results[0] as $key => $value) {
?>	
	<tr>
		<td><?=$value["id"]?></td>
		<td><?=$value["first_name"]?></td>
		<td><?=$value["last_name"]?></td>
		<td><?=$value["registered_datetime"]?></td>
		<td><?=$value["email"]?></td>
	</tr>
<? } ?>
	</table>
