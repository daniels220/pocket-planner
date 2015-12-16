<table class="<?=$classes?>">
	<tr class="has-spanned-cell">
		<th class="main-header" rowspan="13"><div>
			<span class="month-text"><?=$month?></span>
			<span class="year-text"><?=$year?></span>
		</div></th>
		<th>Monday</th><th>Tuesday</th><th class="wed">Wednesday</th><th>Thursday</th><th>Friday</th><th>Sat. Sun.</th>
	</tr>
	<?php splitRows(5); ?>
</table>