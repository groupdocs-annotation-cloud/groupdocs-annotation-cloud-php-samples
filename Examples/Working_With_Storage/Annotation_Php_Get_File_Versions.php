<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetStorageApiInstance();

		$request = new GroupDocs\Annotation\Model\Requests\GetFileVersionsRequest("annotationdocs\one-page.docx", CommonUtils::$MyStorage);
		$response = $apiInstance->getFileVersions($request);
		
		echo "Expected response type is FileVersions: ", $response;
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>