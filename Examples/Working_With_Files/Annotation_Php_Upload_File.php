<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFileApiInstance();
		$filePath = realpath(dirname(__DIR__). '\Resources\annotationdocs\one-page.docx');
		echo "filePath: ". $filePath;

		$fileStream = readfile($filePath);
		$request = new GroupDocs\Annotation\Model\Requests\UploadFileRequest("annotationdocs\one-page1.docx", $fileStream);
		$response = $apiInstance->uploadFile($request);
		
		echo "Expected response type is FilesUploadResult: ", $response;
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>