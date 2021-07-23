<?php
Rsbal = Rs_POST['balance'];
Rsstdid = Rs_POST['stdid'];
Rspaid = Rs_POST['payamt'];
include "databaseconfig.php";
Rsquery ="update fee_details SET Balance_amt= Rsbal , Paid_fee= 'Rspaid' where Std_id = 'Rsstdid'";
Rssql = mysqli_query(Rscon ,Rsquery);

?>