<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Site name
$fgmembersite->SetWebsiteName('login.html'); //CHANGE LATER

//database login details
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'miaog',
                      /*password*/'p',
                      /*database name*/'testdb',
                      /*table name*/'fgusers3');
$fgmembersite->SetRandomKey('gSRcVS6DrTzrPvr');

?>