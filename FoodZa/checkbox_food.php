<?php
if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check_list']);
echo "<script type=\"text/javascript\">window.alert('Are you sure to proceed?');
    window.location.href = './payment.html';</script>";
//echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected) {
echo "<p>".$selected ."</p>";
}
echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
}
else{
echo "<script type=\"text/javascript\">window.alert('Please select atleast one option');
    window.location.href = './foods1.html';</script>";
}
}
?>

//No need