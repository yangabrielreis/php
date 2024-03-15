<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
    /* returns the location of the file without the risk of running cross server scripts */
    <input type="text" name="username">
    <input type="submit">
  </form>
</body>
</html>

<?php
  foreach($_SERVER as $key => $value){
    echo $key . " => " . $value . "<br>";
  }

  /*
    MIBDIRS => D:/Apps/xampp/php/extras/mibs
    MYSQL_HOME => \xampp\mysql\bin
    OPENSSL_CONF => D:/Apps/xampp/apache/bin/openssl.cnf
    PHP_PEAR_SYSCONF_DIR => \xampp\php
    PHPRC => \xampp\php
    TMP => \xampp\tmp
    HTTP_HOST => localhost
    HTTP_CONNECTION => keep-alive
    HTTP_SEC_CH_UA => "Not A(Brand";v="99", "Opera GX";v="107", "Chromium";v="121"
    HTTP_SEC_CH_UA_MOBILE => ?0
    HTTP_SEC_CH_UA_PLATFORM => "Windows"
    HTTP_UPGRADE_INSECURE_REQUESTS => 1
    HTTP_USER_AGENT => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 OPR/107.0.0.0
    HTTP_ACCEPT => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*.(para separar comentario)/*;q=0.8,application/signed-exchange;v=b3;q=0.7
    HTTP_SEC_FETCH_SITE => none
    HTTP_SEC_FETCH_MODE => navigate
    HTTP_SEC_FETCH_USER => ?1
    HTTP_SEC_FETCH_DEST => document
    HTTP_ACCEPT_ENCODING => gzip, deflate, br
    HTTP_ACCEPT_LANGUAGE => pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7
    HTTP_COOKIE => PHPSESSID=g4l0l71d43js6j7a7ehf1bq9tg
    PATH => C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\Python311\Scripts\;C:\Python311\;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\nodejs\;C:\ProgramData\chocolatey\bin;C:\Program Files\Git\cmd;C:\MinGW\bin;C:\Program Files\dotnet\;C:\Users\yanga\AppData\Local\Microsoft\WindowsApps;C:\Users\yanga\AppData\Roaming\npm;C:\Users\yanga\AppData\Local\Programs\Microsoft VS Code\bin;C:\MinGW\bin;
    SystemRoot => C:\WINDOWS
    COMSPEC => C:\WINDOWS\system32\cmd.exe
    PATHEXT => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW
    WINDIR => C:\WINDOWS
    SERVER_SIGNATURE =>
    Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at localhost Port 80

    SERVER_SOFTWARE => Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12
    SERVER_NAME => localhost
    SERVER_ADDR => ::1
    SERVER_PORT => 80
    REMOTE_ADDR => ::1
    DOCUMENT_ROOT => D:/Apps/xampp/htdocs
    REQUEST_SCHEME => http
    CONTEXT_PREFIX =>
    CONTEXT_DOCUMENT_ROOT => D:/Apps/xampp/htdocs
    SERVER_ADMIN => postmaster@localhost
    SCRIPT_FILENAME => D:/Apps/xampp/htdocs/website/curso/server/index.php
    REMOTE_PORT => 65441
    GATEWAY_INTERFACE => CGI/1.1
    SERVER_PROTOCOL => HTTP/1.1
    REQUEST_METHOD => GET
    QUERY_STRING =>
    REQUEST_URI => /website/curso/server/index.php
    SCRIPT_NAME => /website/curso/server/index.php
    PHP_SELF => /website/curso/server/index.php
    REQUEST_TIME_FLOAT => 1710460007.1336
    REQUEST_TIME => 1710460007

    the most important are: PHP_SELF, REQUEST_METHOD.
   
  */

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "The request method is POST";
  }
  // similar a 
  if(isset($_POST["submit"])){
    echo "The request method is POST";
  }

  
?>