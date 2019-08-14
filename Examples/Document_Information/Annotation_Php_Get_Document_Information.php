<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetInfoApiInstance();

	$request = new GroupDocs\Annotation\Model\Requests\getInfoRequest("annotationdocs\\ten-pages.docx", "");
	$response = $apiInstance->getInfo($request);

    echo "Path: ", $response->getPath();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}