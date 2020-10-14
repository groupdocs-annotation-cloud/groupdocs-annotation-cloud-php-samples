<?php

class MoveFolder {
  public static function Run() { 
	$apiInstance = Utils::GetFolderApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\MoveFolderRequest("annotationdocs1", "annotationdocs1\\annotationdocs1", null, null, true);
	$apiInstance->moveFolder($request);
	
	echo "Expected response type is Void: 'annotationdocs1' folder moved to 'annotationdocs1/annotationdocs1'.", "<br />";
  }
}
