<?php

class MoveFile {
  public static function Run() { 
	$apiInstance = Utils::GetFileApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\MoveFileRequest("annotationdocs\one-page.docx", "annotationdocs1\one-page-copied.docx");
	$apiInstance->moveFile($request);
	
	echo "Expected response type is Void: 'annotationdocs/one-page.docx' file moved as 'annotationdocs1/one-page-copied.docx'.";
  }
}
