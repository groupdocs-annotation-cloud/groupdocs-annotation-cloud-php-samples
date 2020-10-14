<?php

class GetFilesList {
  public static function Run() { 
	$apiInstance = Utils::GetFolderApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\GetFilesListRequest("annotationdocs");
	$response = $apiInstance->getFilesList($request);
	
	echo "Expected response type is FilesList.", "<br />";

	foreach($response->getValue() as $storageFile) {
	  echo "Files: ", $storageFile->getPath(), "<br />";
	}
  }
}
