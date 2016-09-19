<?php

function get_nr_days_current_month() {
    return date("t");
}

function get_current_year() {
    return date("Y");
}

function get_current_month() {
    return date("m"); //if you write 'M' (upper case it will return Jan)
}

function get_nr_days_given_month($month, $year) {
    return cal_days_in_month(CAL_GREGORIAN, $month, $year);
}

/**
 * 
 * Finds all dates between 2 dates and puts it to an array * 
 * @tested - works perfect
 * @param type $strDateFrom
 * @param type $strDateTo
 * @return array
 */
function createDateRangeArray($strDateFrom, $strDateTo) {
    // takes two dates formatted as YYYY-MM-DD and creates an
    // inclusive array of the dates between the from and to dates.

    $aryRange = array();

    $iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
    $iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));

    if ($iDateTo >= $iDateFrom) {
        array_push($aryRange, date('Y-m-d', $iDateFrom)); // first entry
        while ($iDateFrom < $iDateTo) {
            $iDateFrom+=86400; // add 24 hours
            array_push($aryRange, date('Y-m-d', $iDateFrom));
        }
    }
    return $aryRange;
}

?>
