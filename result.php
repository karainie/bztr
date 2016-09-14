<html>
<body>
<?php
$tmp = $_POST["keyword"];
$url= "http://www.blitztransportation.com/Shipment-Lookup-Details-limited-details?columns=tmp%2Cds_ref1_text%2Cds_ref2_text%2Cds_ref3_text&amp;keyword=";
$result=$url. $tmp;
header('Location:'.$result);
?>
</body>
</html>