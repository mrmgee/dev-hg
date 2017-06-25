<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">
<head>
<?php   Loader::element('header_required');
Loader::model('file_list');
Loader::model('file_set');
$date = Loader::helper('date');
$page = Page::getCurrentPage();
$pageID = $page->getCollectionID();
$pageCont = Page::getByID($pageID, $version = 'RECENT');
$parent = Page::getByID($c->getCollectionParentID());
$parentName = $parent->getCollectionHandle();
$pageName = $c->getCollectionHandle();
$fsName = $parentName.'_bkg';
$fs = FileSet::getByName($fsName);
$fileList = new FileList();
$fileList->filterBySet($fs);
$fileList->filterByType(FileType::T_IMAGE); 
$files = $fileList->get(100,0); $a = new Area('Main');
$p = new Area('Phases');

$size = sizeof($files);
$random = rand(0, $size - 1);
$theFile = $files[$random];
$theFilePath = $theFile->getRecentVersion()->getRelativePath();
$homeURL = $parent->getCollectionPath();

$multiLang = $_SESSION['firstMessage'];	
$feedUrl = $_SERVER['DOCUMENT_ROOT'].'/packages/tws_box_grabber/libraries/weather.xml'; $rawFeed = file_get_contents($feedUrl);
$rawFeed = iconv("UTF-8","UTF-8//IGNORE",$rawFeed); $myweather = new SimpleXmlElement($rawFeed);

$weatherTimeFullObj = $myweather->data->r['time'];
$weatherTimeFull = new DateTime($weatherTimeFullObj);
$weatherTime = $weatherTimeFull->format('g:ia'); 
$humidFull = (float)$myweather->data->r->v4; $humid = number_format($humidFull, 1);  
$rainFallFull = (float)$myweather->data->r->v2; $rainFall = number_format($rainFallFull, 1);  
$windSpeedFull = (float)$myweather->data->r->v6; $windSpeed = number_format($windSpeedFull, 1);  
$windDirFull = $myweather->data->r->v7;
$dirsCal = array('N', 'NE', 'E', 'SE', 'S', 'SW', 'W', 'NW', 'N');
$windDir = $dirsCal[round($windDirFull/45)];

$tempFull = (float)$myweather->data->r->v3;
$temp = number_format($tempFull);  
$statsMainBl = $a->getAreaBlocksArray($pageCont);
$blArr = array();  $moonPhasesBl = $p->getAreaBlocksArray($pageCont);
$phaseArr = array();  $ip = $multiLang;
			
foreach ($statsMainBl as $statsLabel) {
	$statsTidesSrc = $statsLabel; 	ob_start();
	$statsTidesSrc->display();
	$statsTides = strip_tags(ob_get_clean());
	array_push($blArr, $statsTides);
}
foreach ($moonPhasesBl as $statsLabel) {
	$statsTidesSrc = $statsLabel; 	ob_start();
	$statsTidesSrc->display();
	$statsTides = strip_tags(ob_get_clean());
	array_push($phaseArr, $statsTides);
}

if ($c->isEditMode()) {
	$isEdit = 1;
}
else {
	$isEdit = 0;
}
?>
	<script type="text/javascript">
		var appCat = "<?php echo $pageName ?>";
		
		$(document).ready(function() {
			$(".nHome").click(function(event){
				event.preventDefault();
				linkLocation = '<?php echo $homeURL ?>';
				$("#main-bkg-inner").fadeOut(500);
				$("#main-content-container").fadeOut(500, redirectPage);
			});
				 
			function redirectPage() {
				window.location = linkLocation;
			}
		});
	</script>
	<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('main.css')?>" />
</head>
<body id="stats">

<!--START main container -->
<div id="main-container">
	<div id="/<?php echo $parentName ?>" class="nHome lHome<?php echo $multiLang ?> <?php echo $parentName ?> "><div></div></div>
<!--END header -->
	<div class="clear"></div>

	<div id="main-content-container" class="grid_24 stats">
		<div id="main-content-inner" class="stats">
<?php	
if ($isEdit == 1) {  	echo '<div style="border:1px #fe66ee solid">'.PHP_EOL;
	echo '<h2>Stat Labels</h2>'.PHP_EOL;
	$a = new Area('Main');
	$a->display($c);
	echo '</div>'.PHP_EOL;
	echo '<div style="border:1px #666666 solid">'.PHP_EOL;
	echo '<h2>Moon Phases</h2>'.PHP_EOL;
	$p = new Area('Phases');
	$p->display($c);
	echo '</div>'.PHP_EOL;
	
} else {   $blArrInd = $multiLang;

if ($multiLang == 0){		$dateHeader = 'Stats for '.$date->getLocalDateTime('now', 'F d, Y');
} else {
	$spnNowDate = $date->getLocalDateTime('now', 'Y m d w');
	$ano = substr($spnNowDate, 0, 4);  	$mesZero = substr($spnNowDate, 5, 2);  	$mes += $mesZero;
	$diaZero = substr($spnNowDate, 8, 2);  	$dia += $diaZero;
	$diasemana = substr($spnNowDate, -1);  	$diassemanaN = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
	$mesesN = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$dateHeader ='Estadísticas representa el '.$dia.' de '.$mesesN[($mes-1)].' de '.$ano;
	
}
?>
			<div class="header main <?php echo $parentName; ?>">
				<h1><?php echo $dateHeader; ?></h1>			
			</div>
			<div class="statCont scTides">			
				<h2><?php echo $blArr[$blArrInd]; $blArrInd += 2; ?></h2>	
				<img id="graph1" src="/packages/tws_box_grabber/libraries/thumbnails/9414523_wl_24.png" width="700px" ondragstart="return false">
				<h3><?php echo $blArr[$blArrInd]; $blArrInd += 2; echo ' '.$weatherTime ?></h3>			
			</div>
			<div class="statCont scRight">

			<div class="statCont scMoon">
				<h2><?php echo $blArr[$blArrInd]; $blArrInd += 2; ?></h2>
<?php
$myVal = 0;

function moon_phase($year, $month, $day){
	$c = $e = $jd = $b = 0;
	if ($month < 3) {
		$year--;
		$month += 12;
	}
	++$month;

	$c = 365.25 * $year;
	$e = 30.6 * $month;
	$jd = $c + $e + $day - 694039.09;		$jd /= 29.5305882;						$b = (int) $jd;							$jd -= $b;								$b = round($jd * 8);				
	if ($b >= 8 ){
		$b = 0;	}
	return $b;
}  
$timestamp = time();
$myVal = moon_phase(date('Y', $timestamp), date('n', $timestamp), date('j', $timestamp));		
$phaseArrInd = ($myVal*2)+$multiLang; 
echo '<h3>'.$phaseArr[$phaseArrInd].'</h3><div id="statMoon" class="moon'.$myVal.'"></div>'.PHP_EOL;
?>
			</div>

			<div class="statCont scSm wind">
				<h2><?php echo $blArr[$blArrInd]; $blArrInd += 2; ?></h2>
				<h3><?php echo $windDir ?></h3>
				<h3><?php echo $windSpeed ?><i>/MPH</i></h3>
			</div>
			
			<div class="statCont scSm humidity">
				<h2><?php echo $blArr[$blArrInd]; $blArrInd += 2; ?></h2>
				<h3><?php echo $humid ?>%</h3>
				<h3><?php echo $rainFall ?><i>in</i></h3>
			</div>
			
			<div class="clear"></div>

			<div class="statCont temp">
				<h2><?php echo $blArr[$blArrInd]; $blArrInd += 2; ?></h2>
				<h3><?php echo $temp ?>° F</h3>
			</div>
			<div class="statCont sun">
				<h2><?php echo $blArr[$blArrInd]; $blArrInd += 2; ?></h2>
<?php


$zenith=90+50/60;
$dstChk = date("I");	$dst = -(8-$dstChk);						
$sunRise24 = date_sunrise(time(), SUNFUNCS_RET_STRING, 37.45, -122.10, $zenith, $dst);
$sunSet24 = date_sunset(time(), SUNFUNCS_RET_STRING, 37.45, -122.10, $zenith, $dst);

$sunRiseFull = date("g:i a", strtotime($sunRise24));
$sunRiseNum = substr($sunRiseFull, 0, -3);
$sunRiseAMP = substr($sunRiseFull, -2);

$sunSetFull = date("g:i a", strtotime($sunSet24));
$sunSetNum = substr($sunSetFull, 0, -3);
$sunSetAMP = substr($sunSetFull, -2);			
?>
				<h4 class="sunSet"><?php echo $sunRiseNum.'<i>'.$sunRiseAMP.'</i>' ?></h4>
				<h4><?php echo $sunSetNum.'<i>'.$sunSetAMP.'</i>' ?></h4>
			</div>
		</div><!-- END statCont scRight -->
			<div class="clear"></div>
<?php			
}  ?>
		</div><!-- END main-content-inner -->
	</div>
</div><!-- END main container -->

<!-- FOOTER START main-bkg -->
<div id="main-bkg" class="sea_bkg" style="background:url(<?php echo $theFilePath ?>) 0 0 no-repeat;">
	<div id="main-bkg-outer">
		<div id="main-bkg-inner" class="fullScreen"></div>
	</div>
</div><!-- END main-content-bkg -->
<?php   Loader::element('footer_required'); ?>
<?php  $this->inc('elements/analytics.php'); ?>
</body>
</html>