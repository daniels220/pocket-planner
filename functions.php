<?php
function tds($count) {
	for ($i=0;$i<$count;$i++)
		echo '<td></td>';
}
function trs($count,$length) {
	for ($i=0;$i<$count;$i++) {
		echo '<tr>';
		tds($length);
		echo "</tr>\n";
	}
}
?>