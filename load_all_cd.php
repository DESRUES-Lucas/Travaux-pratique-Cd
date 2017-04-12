<?php
include('include/conf.inc.php');
include('include/sql.inc.php');


$tab_all_cd =  [];
$bdd = connect_bdd();

$sql = "SELECT * FROM cd_album ";

$tab_cd = send_sql_multi($bdd,$sql);

$tab_all_cd ["tabAllCD"]= $tab_cd;

echo json_encode($tab_all_cd);