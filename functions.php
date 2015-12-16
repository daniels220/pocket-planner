<?php
function tds($count,$attrs='') {
	for ($i=0;$i<$count;$i++)
		echo "<td$attrs></td>";
}
function trs($count,$length,$attrs='') {
	for ($i=0;$i<$count;$i++) {
		echo '<tr>';
		tds($length,$attrs);
		echo "</tr>\n";
	}
}
function splitRow() {
	echo '<tr>';
	tds(5,' rowspan="2"');
	tds(1);
	echo '</tr><tr>';
	tds(1);
	echo '</tr>';
}
function splitRows($count) {
	for($i=0;$i<$count;$i++)
		splitRow();
}
?>