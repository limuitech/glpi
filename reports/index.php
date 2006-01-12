<?php
/*
 ----------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2005 by the INDEPNET Development Team.
 
 http://indepnet.net/   http://glpi.indepnet.org
 ----------------------------------------------------------------------

 LICENSE

	This file is part of GLPI.

    GLPI is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    GLPI is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with GLPI; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ------------------------------------------------------------------------
*/
 
// Based on:
// IRMA, Information Resource-Management and Administration
// Christian Bauer 
// ----------------------------------------------------------------------
// Original Author of file:
// Purpose of file:
// ----------------------------------------------------------------------

include ("_relpos.php");
include ($phproot . "/glpi/includes.php");

checkAuthentication("normal");

commonHeader($lang["title"][16],$_SERVER["PHP_SELF"]);

 // titre
        echo "<div align='center'><table ><tr><td>";
        echo "<img src=\"".$HTMLRel."pics/rapports.png\" alt='".$lang["Menu"][6]."' title='".$lang["Menu"][6]."'></td><td><span class='icon_nav'><b>".$lang["Menu"][6]."</b></span>";
        echo "</td></tr></table></div>";



echo "<div align='center'><table class='tab_cadre' cellpadding='5'>";
echo "<tr><th>".$lang["reports"][0].":</th></tr>";

// Report generation
// Default Report included
$report_list["default"]["name"] = $lang["reports"][26];
$report_list["default"]["file"] = "reports/default.php";

// Vous pouvez faire vos propres rapports :
// My Own Report:
// $report_list["my_own"]["name"] = "My Own Report";
// $report_list["my_own"]["file"] = "reports/my_own.php";


// Rapport ajout�s par GLPI V0.2
$report_list["Contrats"]["name"] = $lang["reports"][27];
$report_list["Contrats"]["file"] = "reports/contrats.php";
$report_list["Par_annee"]["name"] = $lang["reports"][28];
$report_list["Par_annee"]["file"] = "reports/parAnnee.php";
$report_list["Intervention"]["name"] = $lang["reports"][25];
$report_list["Intervention"]["file"] = "reports/tracking.php";
$report_list["Rapport prises reseau"]["name"]=$lang["reports"][33];
$report_list["Rapport prises reseau"]["file"]="reports/reseau.php";
$report_list["Infocoms"]["name"]=$lang["reports"][62];
$report_list["Infocoms"]["file"]="reports/infocoms.php";
$report_list["Infocoms2"]["name"]=$lang["reports"][63];
$report_list["Infocoms2"]["file"]="reports/infocoms_conso.php";

$i = 0;
$count = count($report_list);
while($data = each($report_list)) {
	$val = $data[0];
	$name = $report_list["$val"]["name"];
	$file = $report_list["$val"]["file"];
	echo  "<tr class='tab_bg_1'><td align='center'><a href=\"$file\"><b>$name</b></a></td></tr>";
	$i++;
}

echo "</table></div>";

commonFooter();
?>
