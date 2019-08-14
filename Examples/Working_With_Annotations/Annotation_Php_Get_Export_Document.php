<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetAnnotateApiInstance();
	
	$request = new GroupDocs\Annotation\Model\Requests\GetExportRequest("annotationdocs\\ten-pages.docx", null, true, 1, 2, "");
	$response = $apiInstance->getExport($request);

    echo "Expected response type is File: ", $response->getSize();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}