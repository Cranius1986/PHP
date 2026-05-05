<?php
header("X-WAF-Name: WAF by Cranius1986"); 

# SESSION
if (session_status() === PHP_SESSION_NONE) 
{
	session_start();
}	

$session_id = session_id();
$lifetime = time() + (60 * 650 * 24);

# API
$response = file_get_contents("https://api.ipquery.io/".$_SERVER['REMOTE_ADDR']."");
$geo_data = json_decode($response, true);

# ASN
$asn 			= (int)$geo_data['isp']['asn'] ?? 0;
$asn_list		= array(680, 31103, 721, 88, 110, 668, 1056, 1049, 33923, 2107, 20633, 48047, 41701, 25109, 12389, 31305, 2856, 3768);

if(in_array($asn,$asn_list))
	{
		sleep(3);
		http_response_code(451);
		exit;
	}

# GEO BLOCK
$country 		= strtoupper($geo_data['location']['country_code']) ?? '';
$country_list	= array('BD', 'BR', 'BY', 'CN', 'HK', 'ID', 'IN', 'IQ', 'IR', 'JP', 'KH', 'KP', 'KR', 'KZ', 'LA', 'LK', 'LT', 'MA', 'MM', 'MN', 'MY', 'NG', 'NP', 'PH', 'PK', 'PS', 'QA', 'RO', 'RU', 'SG', 'TH', 'TR', 'TW', 'UA', 'UZ', 'VN');

if(in_array($country,$country_list))
	{
		sleep(3);
		http_response_code(451);
		exit;
	}

# USERAGENT
$ua_found=false;
$useragent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
$useragent_list=array(
'curl', 'wget', 'winhttp', 'HTTrack', 'clshttp', 'loader', 'email', 'harvest', 'extract', 'grab', 'miner', 'libwww-perl', 'acunetix', 'sqlmap', 'python', 'nikto', 'scan',
'crawl', 'spider', 'shadow', 'stretchoid', 'censys', 'inspect', 'client/1.1', 'zgrab', 'NetcraftSurvey', 'host', 'RootEvidence', 'http', 'https',
'okhttp', 'Go-http-client', 'probethenet', 'gptbot', 'openai', 'claudebot', 'anthropic', 'meta', 'facebook', 'InspectionTool', 'ALittle Client', 'Research', 'Amazon',
'${jndi:ldap', '///', 'Exploit', 'air.ai', 'AliveHunter', 'Aliyun', 'DownloadManager', 'Android_Ant_Client', 'Apache', 'Java', 'Baidu', 'Brightbot', 'Bun', 'Burst',
'Title', 'Fetcher', 'CCBot', 'CGrab', 'CheckMarkNetwork', 'Chrome Privacy Preserving Prefetch Proxy', 'Cloud', 'cpp-httplib', 'CT-Monitor', 'Custom-AsyncHttpClient',
'Dalvik', 'ddg_android', 'Denic-Crawler', 'doesitrunon', 'DomainCollector', 'Demon', 'Daemon', 'DuckDuckBot', 'ELinks', 'URI Client', 'Embarcadero', 'eRecht24', 'ERIPP',
'Facebot', 'FAST-Web', 'fasthttp', 'FileTransport', 'Nutch', 'UCEProtect', 'Fuzz Faster U Fool', 'AhrefsBot', 'GenomeCrawlerd', 'getodin', 'ImagesiftBot', 'InternetMeasurement',
'MJ12bot', 'ModatScanner', 'MojeekBot', 'SemrushBot', 'SEOkicks', 'silver.inc', 't3versionsBot', 'tchelebi', 'WAT', 'VertexWP', 'WebatlasBot', 'websiphon',
'Website-info.net-Robot', 'WG-Scanner', 'wpbot', 'WPChecker', 'XML', 'Y!J-WSC', 'yandex', 'yahoo', 'u-server-health-scanner',
);

foreach ($useragent_list as $word) 
{ 
    if ($useragent !== '' && str_contains($useragent, strtolower($word))) 
    {		
        $ua_found = true;
        break; 
    }
}

if($ua_found == true || $useragent == '')
	{
		sleep(3);
		http_response_code(403);
		exit;
	}	
	
# ANTI DDOS
if (!isset($_SESSION['anti_ddos']['requests'])) 
{
    $_SESSION['anti_ddos']['requests'] = [];
}

$_SESSION['anti_ddos']['requests'][] = time();
$_SESSION['anti_ddos']['requests'] = array_slice($_SESSION['anti_ddos']['requests'], -5);
$counts = count($_SESSION['anti_ddos']['requests']);

if ($counts >= 5) 
{
    $first_request = $_SESSION['anti_ddos']['requests'][0];
    $last_request  = end($_SESSION['anti_ddos']['requests']);
    
    $diff = $last_request - $first_request;
    
    if ($diff <= 2) 
	{	
		sleep(3);
		http_response_code(403);
		exit;
    }
}

# ENCODING
if (
(stripos($_SERVER['HTTP_ACCEPT'], 'application/javascript') !== false && stripos($_SERVER['HTTP_ACCEPT'], 'text/html') === false) ||
$_SERVER['HTTP_ACCEPT_ENCODING'] == '' ||
$_SERVER['HTTP_ACCEPT_LANGUAGE'] == ''
) 
	{	
		sleep(3);
		http_response_code(405);
		exit;
    }


# FILE Upload
$uploads_enabled = strtolower(ini_get('file_uploads'));

if($uploads_enabled != 1 && isset($_FILES) && !empty($_FILES)) 
	{	
		    foreach ($_FILES as $fileKey => $fileData) 
			{
				if ($fileData['error'] !== UPLOAD_ERR_NO_FILE || !empty($fileData['name'])) 
				{   
					sleep(3);
					http_response_code(405);
					exit;
				}
			}

	}

# PAYLOAD
$content_length = (int)($_SERVER['CONTENT_LENGTH'] ?? 0);

if($content_length > 1024)
	{	
		unset($_POST);
		unset($_GET);
		unset($_REQUEST);
		unset($_FILES);
		unset($_SERVER['QUERY_STRING']);
		
		sleep(3);
		http_response_code(405);
		exit;	
	}	

# REQUEST
$keys = [
    'FORBIDDEN' => 
	[
        'dns=', 'name=', 'cmd=', 'passwd', 'eval(', 'base64_', '.env', 'etc/', 'dnsmeasure'    
    ],
    'BLACKLIST_WORD' => 
	[
        'passwd', 'shadow', 'htaccess', 'htpasswd', 'config', 'phpinfo', 'getenv', 'exploit', 'include', 'remote', 'data', 'expect'     
    ],
    'CMS' => 
	[
        'wp-admin', 'xmlrpc', 'phpmyadmin', 'adminer', 'pma', 'setup', 'install', 'wp', 'xdebug', 'proxy', 'autodiscover', 'wp-includes'        
    ],
    'SHELL' => 
	[        
        'shell', 'exec', 'passthru', 'system', 'eval', 'powershell', 'cmd', 'bash', '///', 'metadata', 'actuator', 'docker', 'container'
    ],    
    'XSS_DETECTION' => 
	[
        'javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', 'link', 'style', 'script', 'embed', 'object', 'iframe', 
        'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'base', 'form', 'href', 'div', 'cdata'
    ],
    'BAD_USER_AGENT' => 
	[
        'curl', 'wget', 'winhttp', 'HTTrack', 'clshttp', 'loader', 'email', 'harvest', 'extract', 'grab', 'miner', 'libwww-perl', 'acunetix', 
        'sqlmap', 'python', 'nikto', 'scan'
    ],
    'SQL_INJECTION' => 
	[
        'or 1=1', 'or 1 = 1', 'benchmark(', 'sleep(', 'drop table', 'alter table', 'truncate table', 'create database', 'delete from', 'update set', 'select * from',
        'union', 'select', 'insert', 'delete', 'drop', 'update', 'into', 'table'
    ],
    'EXPLOIT' => 
	[
        'jndi', 'ldap'
    ],
    'PATH_TRAVERSAL' => 
	[
        '../', '..\\', '%2e%2e%2f', '%2e%2e/', '..%2f', '%2e%2e%5c'
    ],
    'REMOTE_FILE' => 
	[
        'http://', 'https://', 'ftp://', 'php://', 'file://', 'webdav://'
    ],
    'FILE' => 
	[
        'http://', 'https://', 'ftp://', 'php://', 'file://', 'webdav://', 'env', '.git', '.svn', '.bak', '.bat', '.sh', '.md', '.sqlite', '.cgi'
    ]    
];	

$r_found = false;

$request_query = $_SERVER['QUERY_STRING'] ?? '';
$request = strtolower(urldecode($request_query));

foreach ($keys as $category => $words) 
{
    foreach ($words as $word) 
    {
        if (str_contains($request, $word)) 
        {
            $r_found = true;
            break 2;
        }
        
        if (str_contains($request, '=')) 
        {
            $parts = preg_split('/[?&=]/', $request_uri);
            foreach ($parts as $part) 
            {
                if (strlen($part) > 8) 
                {
                    $decoded = base64_decode($part, true);
                    if ($decoded && str_contains(strtolower($decoded), $word)) 
                    {
                        $r_found = true;
                        break 3; 
                    }
                }
            }
        }
    }
}

if($r_found == true)
	{
		sleep(3);
		http_response_code(403);
		exit;
	}

# REQUEST TOO LONG
if (strlen($request) > 255) 
	{
		sleep(3);
		http_response_code(403);
		exit;
	}  

# REQUEST METHOD 
$method=$_SERVER['REQUEST_METHOD'];
$methods_allowed=array("GET", "POST", "OPTIONS", "HEAD");
$methods_not_allowed=array("PUT", "DELETE", "CONNECT", "TRACE", "PATCH", "PROPFIND", "PURGE");

if(in_array($method,$methods_not_allowed) && !in_array($method,$methods_allowed))
	{	
		sleep(3);
		http_response_code(403);
		exit;
	}

# SESSION HOPPING
setcookie('waf_sess_id', $session_id, 
[
    'expires' => $lifetime,
    'path' => '/',
    'domain' => '.'.$_SERVER['HTTP_HOST'].'',
    'httponly' => true,
    'secure' => true,
    'samesite' => 'Lax'
]);

if (isset($_SESSION['initiated'])) 
	{
		if (!isset($_COOKIE['waf_sess_id']) || $_COOKIE['waf_sess_id'] !== $session_id) 
		{
			sleep(3);
			http_response_code(451);
			exit;    
		}
	} 
else 
	{
		$_SESSION['initiated'] = true;
	}
?>

