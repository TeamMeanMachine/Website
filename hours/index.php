<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>2015 Build Season Hours</title>

    <style type="text/css">

        a:link {
            color: #8C0209;
            text-decoration: none;
        }

        a:visited {
            color: #8C0209;
        }

        a:hover {
            text-decoration: underline;
        }

        a.current {
            text-decoration: underline;
        }

        .fancy td {
            text-align: center;
            vertical-align:top;
        }

        .fancytable {
            border-collapse: collapse;
        }

        .fancytable.discription td {
            vertical-align:top;   
        }

        .fancytable th {
            font: bold 16px "Trebuchet MS", Verdana, Arial, Helvetica,
            sans-serif;
            color: #FFFFFF;
            border-right: 1px dashed black;
            text-align: center;
            padding: 6px 6px 6px 6px;
            background: #890208;
        }


        .fancytable td {
            vertical-align:middle;
            border-right: 1px dashed black;
            background: #FFFFFF;
            padding: 6px 6px 6px 6px;
            color: #000000;
            text-align:center;
        }

        .fancytable .solid {
            border-right: 1px solid black;
        }

        .fancytable .inout {
            border-top: 1px solid black;
        }

        .fancytable td:last-child, .fancytable th:last-child {
            border-right:none;
        }

        .fancytable tr:nth-child(even) td{ 
            background: #A0A0A0; 
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/jquery/floatThead/jquery.floatThead.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".fancytable").floatThead({});
        });
    </script>
        <script>
        function showHours(str) {
            if (str == "") {
                document.getElementById("hourstable").innerHTML = "";
                return;
            } else { 
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("hourstable").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","loadhours.php?week="+str,true);
                xmlhttp.send();
            }
        }
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

// sending query
$result = mysql_query("SELECT name, ROUND(SUM(hours) / 168 ,3), ROUND(SUM(hours) / 24 ,2), ROUND(SUM(hours), 2), ROUND(SUM(hours) * 60 ,2), ROUND(SUM(hours) * 3600, 0), SUM(invalid) FROM {$table} WHERE DATE(time_in) < '2015-02-18' GROUP BY name ORDER BY ROUND(SUM(hours), 4) DESC");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<h1>2015 Build Season Shop Hours</h1>";
echo "<table class='fancytable'><thead><tr>";
echo "<th>#</th>";
echo "<th>Name</th>";
echo "<th>Total Weeks</th>";
echo "<th>Total Days</th>";
echo "<th>Total Hours</th>";
echo "<th>Total Minutes</th>";
echo "<th>Total Seconds</th>";
echo "<th>Total Fails</th>";
echo "</tr></thead>\n";
// printing table rows
$place = 1;
while($row = mysql_fetch_row($result))
{
    echo "<tr>";
    echo "<td>" . $place . "</td>";
    foreach($row as $cell) {
        echo "<td>$cell</td>";
    }
    $place++;

    echo "</tr>\n";
}
echo "</table>";
mysql_free_result($result);


$result = mysql_query("SELECT name, ROUND(SUM(hours), 2), SUM(invalid) FROM {$table} WHERE DATE(time_in) >= '2015-02-18' GROUP BY name ORDER BY ROUND(SUM(hours), 4) DESC");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<h1>Post Build Season Hours</h1>";
echo "<table class='fancytable'><thead><tr>";
echo "<th>#</th>";
echo "<th>Name</th>";
echo "<th>Total Hours</th>";
echo "<th>Total Fails</th>";
echo "</tr></thead>\n";
// printing table rows
$place = 1;
while($row = mysql_fetch_row($result))
{
    echo "<tr>";
    echo "<td>" . $place . "</td>";
    foreach($row as $cell) {
        echo "<td>$cell</td>";
    }
    $place++;

    echo "</tr>\n";
}
echo "</table>";
mysql_free_result($result);


//$dates = date_range(strtotime('monday this week'), strtotime("sunday this week"));
$weekdates = array(
    "1" => "2015-01-03",
    "2" => "2015-01-10",
    "3" => "2015-01-17",
    "4" => "2015-01-24",
    "5" => "2015-01-31",
    "6" => "2015-02-07",
    "7" => "2015-02-14",
    "8" => "2015-02-21",
    "9" => "2015-02-28",
    "10" => "2015-03-07",
    "11" => "2015-03-14",
    "12" => "2015-03-21",
    "13" => "2015-03-28",
    "14" => "2015-04-04",
);
$dates = array();
$begindate = "";
$currentweek = "";
if(isset($_GET['week'])) {
    $begindate = $weekdates[$_GET["week"]];
    $currentweek = $_GET["week"];
}
else {
    foreach($weekdates as $week => $date) {
        for($i = 0; $i < 7; $i++) {
            if(date("Y-m-d") == date("Y-m-d", strtotime($date . "+ $i days"))) {
                $begindate = $date;
                $currentweek = $week;
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
$date_select .= "FROM roster WHERE roster.name <> 'quit' AND roster.name <> 'Griffen Gorsuch' ORDER BY roster.name";
$result = mysql_query($date_select);

if(!$result) {
    echo mysql_error() . "\n";
}
echo "<h1>Hour Log</h1>";
echo "<h3>Week: ";
for($i = 1; $i <= count($weekdates); $i++) {
    if($currentweek == $i) {
        echo "<a class='current' href='?week=$i'>$i</a> ";
    }
    else {
        echo "<a href='?week=$i'>$i</a> ";
    }
}
echo "</h3>";
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

echo "<h1>The list of shame</h1>";
echo "<ul>";
$result = mysql_query("SELECT DISTINCT name FROM hours WHERE invalid = 1 ORDER BY name");
while($row = mysql_fetch_row($result)) {
    echo "<li>$row[0]</li>";
}
echo "</ul>";
mysql_free_result($result);

$result = mysql_query("SELECT DISTINCT name FROM hours WHERE DATE(hours.time_in) IN ($listdates) GROUP BY name, DATE(time_in) HAVING COUNT(DATE(time_in)) > 3 ORDER BY COUNT(DATE(time_in)) DESC");
if($row = mysql_fetch_row($result)) {
    echo "<h1>You are annoying, stop it</h1>";
    echo "<ul>";
    do {
        echo "<li>$row[0]</li>";
    } while($row = mysql_fetch_row($result));
    echo "</ul>";
}
mysql_free_result($result);

function date_range($first, $last, $step = '+1 day', $output_format = 'Y-m-d' ) {

    $dates = array();
    $current = $first;
    $last = $last;

    while( $current <= $last ) {
        $dates[] = date($output_format, $current);
        $current = strtotime($step, $current);
    }
    return $dates;
}

?>
</body></html>