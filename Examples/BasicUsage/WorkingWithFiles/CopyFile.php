<?php

class CopyFile {
  public static function Run() { 
	$apiInstance = Utils::GetFileApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\CopyFileRequest("annotationdocs\one-page.docx", "annotationdocs\one-page-copied.docx");
	$apiInstance->copyFile($request);
	
	echo "Expected response type is Void: 'annotationdocs/one-page.docx' file copied as 'annotationdocs/one-page-copied.docx'.";
  }
}
