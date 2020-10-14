<?php

class DownloadFile {
  public static function Run() { 
	$apiInstance = Utils::GetFileApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\DownloadFileRequest("annotationdocs\one-page.docx");
	$response = $apiInstance->downloadFile($request);
	
	echo "Expected response type is File: ", strlen($response);
  }
}
