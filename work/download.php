<?php

if(!empty($_GET['file']))
{
	$fileName = basename($_GET['file']);
	$filePath = 'auploads/'.$fileName;
	 
	  if (file_exists($filePath)) 
	  {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header("Content-Disposition: attachment; filename= $fileName");
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
           
            ob_clean();
            flush();
            readfile($filePath);
            exit;
        }
	 
	 
	 
	/* if(!empty($fileName) && file_exists($filePath))
	 {
		 header("cache-control : public ");
		 header("content-description : file transfer");
		 header("content-disposition : attachment;filename=$fileName");
		 header("content-type : application/zip");
		 header("content-transfer-encoding : binary");
		 readfile($filePath);
		 exit;
		 
	 }*/
	 else
	 {
		 echo'The file dose not exist';
	 }
}



?>