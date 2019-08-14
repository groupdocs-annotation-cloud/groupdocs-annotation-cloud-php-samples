<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetPreviewApiInstance();
	
	$request = new GroupDocs\Annotation\Model\Requests\GetPagesRequest("annotationdocs\\ten-pages.docx", null, null, null, null, null, null, "");
	$response = $apiInstance->getPages($request);

    echo "Expected response type is PageImages Count: ", $response->getTotalCount();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}