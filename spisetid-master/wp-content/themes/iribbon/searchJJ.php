<?php
/*
  Template Name: searchJJ
 */
//get_header();
$serverName = "localhost";
$usrName = "spisetid-admin";
$pass = "minimum64D.";
$dbName = "spisetid";

mysql_connect($serverName, $usrName, $pass);
mysql_select_db($dbName);
if (isset($_POST['searchVal'])) {
    $searchquery = $_POST['searchVal'];
    $searchquery = preg_replace("#[^0-9a-z]#i", "", $searchquery);

    $query = mysql_query("SELECT * FROM opskrifter WHERE navn LIKE '%$searchquery%'") or die("søgning mislykkedes");

    $count = mysql_num_rows($query);
    if ($count == 0) {
        $norecipe = "Ingen opskrifter passer på søgningen";
    } else {
        while ($row = mysql_fetch_array($query)) {
            $id = $row['id'];
            $navn = $row['navn'];
            $kat = $row['kategori'];
            $pic = $row['imageurl'];
            $pic = explode("_", $pic)[0] . "_97.jpg";

            $output .= "<tr><td><a href=" . getenv('HTTP_HOST') . "/opskrifter/opskrift?recipe=" . $id . ">" . $navn . "</a></td><td>" . $kat . "</td><td><img src=" . $pic . "></td></tr>";
        }
    }
}
echo ($output);
