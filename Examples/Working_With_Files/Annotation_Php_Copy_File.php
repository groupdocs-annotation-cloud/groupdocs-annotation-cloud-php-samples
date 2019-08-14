<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFileApiInstance();

		$request = new GroupDocs\Annotation\Model\Requests\CopyFileRequest("annotationdocs\one-page.docx", "annotationdocs\one-page-copied.docx", CommonUtils::$MyStorage, CommonUtils::$MyStorage);
		$apiInstance->copyFile($request);
		
		echo "Expected response type is Void: 'annotationdocs/one-page.docx' file copied as 'annotationdocs/one-page-copied.docx'.";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>