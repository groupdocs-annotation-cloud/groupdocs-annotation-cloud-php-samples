<?php

class DeleteFolder {
  public static function Run() { 
	$apiInstance = Utils::GetFolderApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\DeleteFolderRequest("annotationdocs1\\annotationdocs1", null, true);
	$apiInstance->deleteFolder($request);
	
	echo "Expected response type is Void: 'annotationdocs1/annotationdocs1' folder deleted recursively.", "<br />";
  }
}
