<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/jquery/floatThead/jquery.floatThead.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".fancytable").floatThead({});
        });
    </script>
</head>
<body>

<?php
$db_host = 'www.thelogiccore.com';
$db_user = 'shop_hours';
$db_pwd = 'WCJuU6zpFsmMG5CH';

$database = 'shop_hours';
$table = 'hours';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

$weekdates = array(
    "1" => "2015-01-03",
    "2" => "2015-01-10",
    "3" => "2015-01-17",
    "4" => "2015-01-24",
    "5" => "2015-01-31",
    "6" => "2015-02-07",
    "7" => "2015-02-14"
);
$dates = array();
$begindate = "";
if(isset($_GET['week'])) {
    $begindate = $weekdates[$_GET["week"]];
}
else {
    foreach($weekdates as $date) {
        for($i = 0; $i < 7; $i++) {
            if(date("Y-m-d") == date("Y-m-d", strtotime($date . "+ $i days"))) {
                $begindate = $date;
                break 2;
            }
        }
    }
}
for($i = 0; $i < 7; $i++) {
    $dates[] = date("Y-m-d", strtotime($begindate . "+ $i days"));
}
//$result = mysql_query("SELECT roster.name, (SELECT GROUP_CONCAT(DATE(hours.time_in)) FROM hours WHERE hours.name = roster.name) FROM roster");
$date_select = "SELECT roster.name, ";
for($i = 0; $i < 7; $i++) {
    $date_select .= "(SELECT REPLACE(GROUP_CONCAT(TIME_FORMAT(TIME(hours.time_in), '%h:%i %p')), ',', '<br>') FROM hours WHERE DATE(hours.time_in) = '$dates[$i]' AND hours.name = roster.name), (SELECT REPLACE(GROUP_CONCAT(TIME_FORMAT(TIME(hours.time_out), '%h:%i %p')), ',', '<br>') FROM hours WHERE DATE(hours.time_in) = '$dates[$i]' AND hours.name = roster.name)";
    if($i < 6)
        $date_select .= ",";
}
$listdates = "'";
$listdates .= join("','", $dates);
$listdates .= "'";
$date_select .= ", (SELECT ROUND(SUM(hours.hours), 2) FROM hours WHERE DATE(hours.time_in) IN ($listdates) AND hours.name = roster.name AND hours.invalid = 0)";
$date_select .= "FROM roster WHERE roster.name <> 'quit' ORDER BY roster.name";
$result = mysql_query($date_select);

if(!$result) {
    echo mysql_error() . "\n";
}
echo "<table class='fancytable'><thead><tr>";
echo "<th rowspan='2' class='solid'>Name</th>";
foreach($dates as $date) {
    echo "<th class='solid' colspan='2'>" . date("D - m/d/Y", strtotime($date)) . "</th>";
}
echo "<th rowspan='2'>Hours</th>";
echo "</tr>\n";
echo "<tr>";
for($i = 0; $i < 7; $i++) {
    echo "<th class='inout'>In</th><th class='solid inout'>Out</th>";
}
echo "</tr></thead>";



while($row = mysql_fetch_row($result)) {
    echo "<tr>";
    $count = 1;
    foreach($row as $cell) {
        if($count % 2 == 0)
            echo "<td>$cell</td>";
        else
            echo "<td class='solid'>$cell</td>";
        $count++;
    }
    echo "</tr>\n";
}
echo "</table>";
mysql_free_result($result);
?>
</body>
</html>