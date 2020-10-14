<?php

class GetFileVersions {
  public static function Run() { 
	$apiInstance = Utils::GetStorageApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\GetFileVersionsRequest("annotationdocs\one-page.docx");
	$response = $apiInstance->getFileVersions($request);
	
	echo "Expected response type is FileVersions: ", $response;
  }
}
