<?php

$travel = filter_input(INPUT_POST, 'travel', FILTER_SANITIZE_STRING);
$period = filter_input(INPUT_POST, 'period', FILTER_SANITIZE_STRING);

?>

<?php if ($travel=="yes") : ?>
    echo "<script>alert('You have travelled outside, so its better to go hospital and take a check up'); document.body.style.background="white";window.location='hospital.php'</script>";
    <?php endif ?>
<?php if ($period=="1week" or $period=="moreone") : ?>
    echo "<script>alert('You have symptoms for a long time, so its better to go hospital and take a checkup');window.location='hospital.php'</script>";
<?php else : ?>
    echo "<script>alert('Take medicines and take rest');window.location='medicine.php'</script>";
<?php endif ?>