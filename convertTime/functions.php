<?php
function formatDate() {
    $time = strtotime("September 14, 2029 10:35:00 AM");
    echo date('Y-m-d H:i:s', $time);
}

function formatTheTime($date) {
    return date('Y-m-d H:i:s a', strtotime($date));
}
?>