<?php

// Yes I know I shouldn't do this
date_default_timezone_set('Europe/London');

// Manual arrays, because my council is still backwards enough to distribute this by PDF
$black = array('2507','0808','2208','0509','1909','0310','1710','3110','1411','2811','1212');
$blue = array('0108','1508','2908','1209','2609','1010','2410','0711','2111','0512');
$tomorrow = date("dm", strtotime("+1 day"));

if (in_array("$tomorrow", $black)) {
    $result = array('date' => "$tomorrow", 'bin' => "black");
} elseif (in_array("$tomorrow", $blue)) {
    $result = array('date' => "$tomorrow", 'bin' => "blue");
} else {
    $result = array('date' => "$tomorrow", 'bin' => "none");
}

echo json_encode($result);

?>
