<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetAnnotateApiInstance();
	
	$request = new GroupDocs\Annotation\Model\Requests\DeleteAnnotationsRequest("annotationdocs\\ten-pages.docx");
	$apiInstance->deleteAnnotations($request);

    echo "Expected response type is Void: Annotation deleted from document.";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}