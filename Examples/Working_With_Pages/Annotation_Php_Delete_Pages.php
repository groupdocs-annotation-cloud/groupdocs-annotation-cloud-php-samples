<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetPreviewApiInstance();
	
	$request = new GroupDocs\Annotation\Model\Requests\DeletePagesRequest("annotationdocs\\ten-pages.docx");
	$response = $apiInstance->deletePages($request);

    echo "Expected response type is Void: pages deleted.";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}