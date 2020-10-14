<?php

class CopyFolder {
  public static function Run() { 
	$apiInstance = Utils::GetFolderApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\CopyFolderRequest("annotationdocs", "annotationdocs1");
	$apiInstance->copyFolder($request);
	
	echo "Expected response type is Void: 'annotationdocs' folder copied as 'annotationdocs1'.", "<br />";
  }
}
