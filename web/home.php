<?php 
//This is the test home page. In progress!!

// TODO: Load in Data

// TODO: Display Data
?>
<html>
<!DOCTYPE html>
<meta charset="utf-8">
<style>

body {
  font: 10px sans-serif;
}

.axis path, .axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.line {
  fill: none;
  stroke: steelblue;
  stroke-width: 1.5px;
}

.dot {
  fill: white;
  stroke: steelblue;
  stroke-width: 1.5px;
}

</style>
<body>
	<div id="titleBar"><h2>BNIA Visualization</h2></div>
	<div id="neighborhood"></div>
<div id="csa-selection-map-window" style="display: inline;">
	<p style="text-align: right; margin-right: 15px;"><a href="#" style="color: #333; font-size: 11px; font-style: italic;">close</a></p>

	
	<map id="csa-image-map" name="Map">
		<area shape="poly" coords="17,53,44,80,66,95,96,72,87,54,86,53" href="#11_cross-country_cheswolde" class="inlink"> 
		<area shape="poly" coords="87,54,96,75,103,81,100,87,102,93,114,93,122,98,125,111,128,126,127,137,151,123,154,107,146,87,153,81,146,53,107,53" href="#38_mount-washington_coldspring" class="inlink"> 
		<area shape="poly" coords="145,52,155,81,147,87,154,106,150,123,168,130,176,128,180,137,190,140,198,147,190,107,188,82,190,72,185,69,184,54" href="#22_greater-roland-park_poplar-hill" class="inlink"> 
		<area shape="poly" coords="182,52,183,68,191,71,188,96,191,116,195,142,216,160,218,156,229,160,225,51,227,51,204,50" href="#39_north-baltimore_guilford_homeland" class="inlink"> 
		<area shape="poly" coords="227,53,229,96,260,100,255,90,255,72,249,62,252,53" href="#8_chinquapin-park_belvedere" class="inlink"> 
		<area shape="poly" coords="254,52,248,61,255,71,256,89,264,97,284,93,298,97,306,95,305,77,302,61,310,52" href="#32_loch-raven" class="inlink"> 
		<area shape="poly" coords="309,52,303,62,304,80,305,99,320,103,326,109,350,73,395,95,393,54,393,49" href="#27_harford_echodale" class="inlink"> 
		<area shape="poly" coords="351,72,326,108,348,143,392,96" href="#25_hamilton" class="inlink"> 
		<area shape="poly" coords="395,93,315,172,327,179,339,187,346,198,354,202,379,186,389,163,396,161" href="#6_cedonia_frankford" class="inlink"> 
		<area shape="poly" coords="345,143,327,108,303,98,291,113,287,129,293,144,304,159,315,172" href="#31_lauraville" class="inlink"> 
		<area shape="poly" coords="303,97,291,120,297,152,282,173,270,169,259,167,259,151,252,137,253,106,254,100,278,94" href="#40_northwood" class="inlink"> 
		<area shape="poly" coords="254,100,251,123,253,137,258,149,230,152,230,94" href="#20_greater-govans" class="inlink"> 
		<area shape="poly" coords="395,162,389,164,374,189,352,202,344,196,327,206,307,205,307,219,322,219,349,243,396,218" href="#9_claremont_armistead" class="inlink"> 
		<area shape="poly" coords="297,154,259,199,282,203,306,206,335,203,341,194,337,187" href="#3_belair-edison" class="inlink">
		<area shape="poly" coords="280,173,251,212,229,212,228,189,247,193,264,173,258,168" href="#36_midway_coldstream" class="inlink"> 
		<area shape="poly" coords="259,149,259,169,264,173,245,193,231,187,231,152" href="#52_the-waverlies" class="inlink"> 
		<area shape="poly" coords="231,160,229,214,209,215,208,179,199,174,196,166,199,155,198,148" href="#19_greater-charles-village_barclay" class="inlink"> 
		<area shape="poly" coords="197,146,199,157,198,170,206,181,211,215,198,215,182,189,176,176,158,168,138,163,125,139,151,123,166,131,174,128" href="#34_medfield_hampden_woodberry_remington" class="inlink"> 
		<area shape="poly" coords="138,165,130,174,115,170,112,153,87,136,98,121,126,118,125,134" href="#50_southern-park-heights" class="inlink"> 
		<area shape="poly" coords="126,120,102,121,89,137,61,116,98,92,112,93,122,100" href="#45_pimlico_arlington_hilltop" class="inlink"> 
		<area shape="poly" coords="100,90,61,115,80,134,70,134,26,104,15,112,15,54,63,93,93,74,100,81" href="#18_glen-falstaff" class="inlink"> 
		<area shape="poly" coords="73,134,62,140,66,175,35,193,24,186,18,189,15,112,29,105" href="#29_howard-park_west-arlington" class="inlink"> 
		<area shape="poly" coords="115,184,118,171,107,151,80,133,62,138,63,179,80,175" href="#13_dorchester_ashburton" class="inlink"> 
		<area shape="poly" coords="18,191,20,237,30,243,45,237,52,233,69,229,65,211,45,198,36,203,34,192,25,187" href="#12_dickeyville_franklintown" class="inlink"> 
		<area shape="poly" coords="69,228,78,227,93,240,94,229,84,225,82,217,91,214,95,196,97,181,79,176,60,179,34,193,34,201,43,198,54,203,62,209" href="#17_forest-park_walbrook" class="inlink"> 
		<area shape="poly" coords="158,217,128,176,119,172,110,183,96,180,91,215,122,214,124,218" href="#21_greater-mondawmin" class="inlink"> 
		<area shape="poly" coords="198,216,176,177,138,163,128,177,159,218" href="#44_penn-north_reservoir-hill" class="inlink"> 
		<area shape="poly" coords="50,235,64,261,44,263,47,274,54,295,50,306,59,319,50,321,18,303,18,235,29,244" href="#2_beechfield_ten-hills_west-hills" class="inlink"> 
		<area shape="poly" coords="107,259,96,239,80,228,69,228,51,235,63,261" href="#15_edmondson-village" class="inlink"> 
		<area shape="poly" coords="105,259,44,264,53,295,52,306,59,318,82,307,91,312,130,307,122,291,125,281,116,276" href="#1_allendale_irvington_south-hilton" class="inlink"> 
		<area shape="poly" coords="134,310,128,309,108,311,91,314,83,306,51,321,128,363,172,326,148,321,136,324" href="#37_morrell-park_violetville" class="inlink"> 
		<area shape="poly" coords="191,330,171,324,125,363,211,413,217,403,197,399,180,382,181,363,189,346,193,333" href="#55_westport_mount-winans_lakeland" class="inlink"> 
		<area shape="poly" coords="217,402,225,386,220,367,208,365,187,358,178,369,181,383,194,396" href="#7_cherry-hill" class="inlink"> 
		<area shape="poly" coords="328,434,323,409,299,381,274,379,252,389,223,388,212,412,228,424,273,477,284,492,309,502,355,518,395,484,348,470,311,469,298,470,292,461,289,430,302,442,325,444" href="#4_brooklyn_curtis-bay_hawkins-point" class="inlink"> 
		<area shape="poly" coords="397,404,396,286,383,292,364,295,332,294,323,302,312,303,310,334,315,353,333,353,353,348,377,356,385,356,385,374,383,388,386,403" href="#49_southeastern" class="inlink"> 
		<area shape="poly" coords="333,294,328,265,314,263,311,249,303,242,304,219,321,221,350,245,393,222,398,283,374,295" href="#42_orangeville_east-highlandtown" class="inlink"> 
		<area shape="poly" coords="313,305,312,281,314,273,314,264,326,268,331,290,323,299" href="#28_highlandtown" class="inlink"> 
		<area shape="poly" coords="309,306,296,307,283,293,277,285,282,280,281,265,299,266,298,282,307,285" href="#5_canton" class="inlink"> 
		<area shape="poly" coords="311,286,300,282,302,265,277,266,276,253,306,251,308,246,314,256,311,273" href="#43_patterson-park-north-east" class="inlink"> 
		<area shape="poly" coords="276,252,275,237,301,238,307,247,304,251" href="#33_madison_east-end" class="inlink"> 
		<area shape="poly" coords="303,238,275,238,273,208,250,211,264,199,309,207" href="#10_clifton-berea" class="inlink"> 
		<area shape="poly" coords="274,228,256,229,252,237,228,238,225,231,230,226,229,213,272,210" href="#24_greenmount-east" class="inlink"> 
		<area shape="poly" coords="271,229,253,231,253,235,242,236,243,242,230,243,232,250,228,265,258,258,259,260,272,260,271,229" href="#41_oldtown_middle-east" class="inlink"> 
		<area shape="poly" coords="263,270,262,282,251,286,250,298,259,300,271,296,281,288,281,270,271,266" href="#16_fells-point" class="inlink"> 
		<area shape="poly" coords="260,260,260,280,250,280,250,290,240,290,235,272,260,260" href="#26_harbor-east_little-italy" class="inlink">
		<area shape="poly" coords="229,213,225,230,225,260,218,256,206,255,206,243,176,217" href="#35_midtown" class="inlink"> 
		<area shape="poly" coords="205,242,191,257,186,259,158,218,176,218" href="#53_upton_druid-heights" class="inlink"> 
		<area shape="poly" coords="184,259,144,261,144,218,159,218" href="#47_sandtown-winchester_harlem-park" class="inlink"> 
		<area shape="poly" coords="144,260,109,260,94,230,83,222,83,216,118,212,126,219,145,216" href="#23_greater-rosemont" class="inlink"> 
		<area shape="poly" coords="239,281,189,281,189,258,204,244,206,257,223,258,233,264" href="#14_downtown_seton-hill" class="inlink"> 
		<area shape="poly" coords="190,282,172,282,169,262,186,260" href="#46_poppleton_the-terraces_hollins-market" class="inlink"> 
		<area shape="poly" coords="172,283,173,291,134,311,125,295,126,280,117,274,102,259,144,260,169,262" href="#51_southwest-baltimore" class="inlink"> 
		<area shape="poly" coords="229,284,224,294,239,294,242,312,257,316,251,322,223,318,220,326,206,315,209,302,198,293,192,285,200,282" href="#30_inner-harbor_federal-hill" class="inlink"> 
		<area shape="poly" coords="255,318,267,310,291,327,297,340,275,345,244,340,237,355,227,362,210,343,203,324,204,312,222,324,226,317" href="#48_south-baltimore" class="inlink"> 
		<area shape="poly" coords="208,307,208,316,195,328,176,326,157,322,137,323,133,309,174,291,172,282,194,280,203,292" href="#54_washington-village" class="inlink"> 
	</map>
<img src="standardMap.large.png" usemap="#Map" width="420" border="0" height="544"> 
</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="d3/d3.v2.js"></script>
<!-- CODE TO RENDER THE DETAILED GRAPH GOES BELOW -->

<script src="js/map.js"></script>
<script src="js/detail-line.js"></script>


</body>
</html>
