<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Annotation\Model\Requests\CreateFolderRequest("annotationdocs", CommonUtils::$MyStorage);
		$apiInstance->createFolder($request);
		
		echo "Expected response type is Void: 'annotationdocs' folder created.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>