<?php

$di = new RecursiveDirectoryIterator(__DIR__,RecursiveDirectoryIterator::SKIP_DOTS);
$it = new RecursiveIteratorIterator($di);
$fileArr = [];
foreach($it as $file){
    if(pathinfo($file,PATHINFO_EXTENSION) == "php"){
        ob_start();
        echo $file;
        $file = ob_get_clean();
        $fileArr[] = $file;
    	echo 'found: '.$file.'<br>';
    }
}
echo '<p><b>Cleaned</b></p>';
$arr = [T_COMMENT,T_DOC_COMMENT];
$count = count($fileArr);
for($i=1;$i < $count;$i++){
    $fileStr = file_get_contents($fileArr[$i]);
    foreach(token_get_all($fileStr) as $token){
        if(in_array($token[0],$arr)){
            $fileStr = str_replace($token[1],'',$fileStr);
        }       
    }
    file_put_contents($fileArr[$i],$fileStr);
echo $fileArr[$i].'<br>';
}
?>
https://www.freepornhq.xxx/video/tushy-keisha-grey-and-leah-gotti-share-everything-18522.html
https://www.freepornhq.xxx/video/layla-london-and-marsha-may-fuck-games-17375.html