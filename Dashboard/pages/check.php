<?php
$vid=$_GET['vid'];
$url = $vid;
  
// Getting page header data
$handle = curl_init($url);
curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

/* Get the HTML or whatever is linked in $url. */
$response = curl_exec($handle);

/* Check for 404 (file not found). */
$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
if($httpCode == 404) {
    /* Handle 404 here. */
    header("location:../shorelinesurfteam.html");
}
else{
    header("location:$url");
}
curl_close($handle);

?>