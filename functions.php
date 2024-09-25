<?php
function calculateAge($dob) {
    $dobDate = new DateTime($dob);
    $currentDate = new DateTime();
    return $dobDate->diff($currentDate)->y;
}
?>