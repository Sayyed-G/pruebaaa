<?php 
$ws = "https://e-beta.sunat.gob.pe/ol-ti-itcpfegem-beta/billService"; // para envios de pruebas!!!

$ch = curl_init();
			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,1);
			curl_setopt($ch,CURLOPT_URL,$ws);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
			curl_setopt($ch,CURLOPT_HTTPAUTH,CURLAUTH_ANY);
			curl_setopt($ch,CURLOPT_TIMEOUT,30);
			curl_setopt($ch,CURLOPT_POST,true);
			curl_setopt($ch,CURLOPT_POSTFIELDS,$xml_envio);
			curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
			//para ejecutar los procesos de forma local en windows
			//enlace de descarga del cacert.pem https://curl.haxx.se/docs/caextract.html
			curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__)."/cacert.pem");


			$response = curl_exec($ch);

			$httpcode = curl_getinfo($ch,CURLINFO_HTTP_CODE);

   
   echo $httpcode;


 ?>