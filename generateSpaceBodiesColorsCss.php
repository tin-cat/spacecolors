<?
	
/*
	This scripts generates the CSS file spaceBodiesColors.css following the specs found on spaceBodiesColors.php
 */

include "spaceBodiesColors.php";

$fileName = "spaceBodiesColors.css";

$fileHandler = fopen($fileName, "w") or die("Can't open file ".$fileName." for writing.\n");

$css = "/*\nspacecolors.io\nA CSS repository and experiment to document and explore the real colors of the planets and other space bodies as they might appear to the human eye.\n*/\n\n";

while (list($spaceBodyName, $spaceBodyData) = each($spaceBodiesColors)) {
	$css .= "/* ".$spaceBodyName." */\n";
	foreach ([primary, secondary, tertiary] as $key)
		$css .= ".spaceBodyBackgroundColor.".$spaceBodyName.".".$key." { background-color: rgb(".$spaceBodyData[$key][0].", ".$spaceBodyData[$key][1].", ".$spaceBodyData[$key][2]."); }\n";
	$css .= ".spaceBodyBackgroundGradient.".$spaceBodyName." { background: ".$spaceBodyData[gradientCss]."; }\n";
	$css .= "\n";
}

fwrite($fileHandler, $css) or die("Can't write to file ".$fileName."\n");
fclose($fileHandler);

echo $fileName." has been generated.\n";