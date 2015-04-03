<table class="<?=$classes?>">
	<tr class="has-spanned-cell">
		<th class="main-header" rowspan="2">
			<p class="month-text"></p>
			<p class="year-text"><?=$year?></p>
		</th>
		<th>Monday</th>
		<th>Tuesday</th>
		<th class="wed">Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
		<th>Saturday</th>
		<th>Sunday</th>
	</tr>
	<?php trs(1,7); ?>
	<tr class="has-spanned-cell">
		<td class="notes-box" rowspan="4">
		<?php tds(7); ?></tr>
	<?php trs(3,7); ?>
</table>