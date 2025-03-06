  <?php
// A function to check if a given year is a leap year or not
function isLeapYear($year) {
    // Checks whether the year is a leap year or not
    if ($year % 400 == 0 || $year % 100 != 0 && $year % 4 == 0) {
        return true;
    } else {
        return false;
    }
}

// A function to get the number of days in a given month and year
function daysInMonth($month, $year) {
    // An array containing the number of days in each month
    $daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    // Check if the year is a leap year
    if (isLeapYear($year)) {
        $daysInMonth[2] = 29;
    }

    return $daysInMonth[$month - 1];
}

// A function to get the day of the week for a given date
function dayOfWeek($date) {
    // An array containing the days of the week
    $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    return $days[date('w', strtotime($date))];
}

// A function to get the day of the month for a given date
function dayOfMonth($date) {
    return date('d', strtotime($date));
}

// A function to get the month for a given date
function month($date) {
    return date('m', strtotime($date));
}

// A function to get the year for a given date
function year($date) {
    return date('Y', strtotime($date));
}
?>