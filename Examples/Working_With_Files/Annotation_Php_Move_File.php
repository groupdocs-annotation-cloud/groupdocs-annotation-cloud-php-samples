<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFileApiInstance();

		$request = new GroupDocs\Annotation\Model\Requests\MoveFileRequest("annotationdocs\one-page.docx", "annotationdocs1\one-page-copied.docx", CommonUtils::$MyStorage, CommonUtils::$MyStorage);
		$apiInstance->moveFile($request);
		
		echo "Expected response type is Void: 'annotationdocs/one-page.docx' file moved as 'annotationdocs1/one-page-copied.docx'.";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>