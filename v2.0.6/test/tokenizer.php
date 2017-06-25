<?php
/*
* T_ML_COMMENT does not exist in PHP 5.
* The following three lines define it in order to
* preserve backwards compatibility.
*
* The next two lines define the PHP 5 only T_DOC_COMMENT,
* which we will mask as T_ML_COMMENT for PHP 4.
*/

/*
if (!defined('T_ML_COMMENT')) {
   define('T_ML_COMMENT', T_COMMENT);
} else {
   define('T_DOC_COMMENT', T_ML_COMMENT);
}

$source = file_get_contents('matching.php');
$tokens = token_get_all($source);
$output = '';

foreach ($tokens as $token) {
   if (is_string($token)) {
       // simple 1-character token
       echo $token;
   } else {
       // token array
       list($id, $text) = $token;

       switch ($id) { 
           case T_COMMENT: 
           case T_ML_COMMENT: // we've defined this
           case T_DOC_COMMENT: // and this
               // no action on comments
               break;

           default:
               // anything else -> output "as is"
               echo $text;
               $output .= $text;
               $myfile = fopen("test01.php", "w") or die("Unable to open file!");
               fwrite($myfile, $output);
               fclose($myfile);

               break;
       }
   }
}
*/



function rmcomments($id) {
    if (file_exists($id)) {
        if (is_dir($id)) {
            $handle = opendir($id);
            while($file = readdir($handle)) {
                if (($file != ".") && ($file != "..")) {
                    rmcomments($id."/".$file); }}
            closedir($handle); }
        else if ((is_file($id)) && (end(explode('.', $id)) == "php")) {
            if (!is_writable($id)) { chmod($id,0777); }
            if (is_writable($id)) {
                $fileStr = file_get_contents($id);
                $newStr  = '';
                $commentTokens = array(T_COMMENT);
                if (defined('T_DOC_COMMENT')) { $commentTokens[] = T_DOC_COMMENT; }
                if (defined('T_ML_COMMENT')) { $commentTokens[] = T_ML_COMMENT; }
                $tokens = token_get_all($fileStr);
                foreach ($tokens as $token) {    
                    if (is_array($token)) {
                        if (in_array($token[0], $commentTokens)) { continue; }
                        $token = $token[1]; }
                    $newStr .= $token; }
                    
// Replace doubled spaces with single ones (ignored in HTML any way)
//$newStr = preg_replace('@(\s){2,}@', '\1', $newStr);
// Remove single and multiline comments, tabs and newline chars
//    '@(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|((?<!:)//.*)|[\t\r\n]@i', //ORIG

$newStr = preg_replace(
    '/<!--(?!<!)[^\[>][\s\S]*?-->/',
    '',
    $newStr
);
// /<!--(?!<!)[^\[>][\s\S]*?-->/ No difference 
// /<!--[\s\S]*?-->/ GOOD = matching022.php leaves blank line where comment was

               
                if (!file_put_contents($id,$newStr)) {
                    $open = fopen($id,"w");
                    fwrite($open,$newStr);
                    fclose($open); }}}}
	echo 'Finished cleaning: '.$id;                
}

rmcomments("source/matching.php");

?>