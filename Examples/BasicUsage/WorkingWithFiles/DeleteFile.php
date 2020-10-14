<?php

class DeleteFile {
  public static function Run() { 
	$apiInstance = Utils::GetFileApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\DeleteFileRequest("annotationdocs\one-page-copied.docx");
	$apiInstance->deleteFile($request);
	
	echo "Expected response type is Void: 'annotationdocs1/one-page-copied.docx' file deleted.";
  }
}
