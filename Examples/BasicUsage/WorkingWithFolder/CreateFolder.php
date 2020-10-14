<?php

class CreateFolder {
  public static function Run() { 
	$apiInstance = Utils::GetFolderApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\CreateFolderRequest("annotationdocs");
	$apiInstance->createFolder($request);
	
	echo "Expected response type is Void: 'annotationdocs' folder created.", "<br />";
  }
}
