<?php
require_once __DIR__.'/../../php/common/dashboardWhistle.php';

$manager=new Dashboard();
$whistleData=$manager->whistleCompany();
echo json_encode($whistleData);


 //$riskScore=$manager->riskScoring();
// echo json_encode($riskScore);


?>