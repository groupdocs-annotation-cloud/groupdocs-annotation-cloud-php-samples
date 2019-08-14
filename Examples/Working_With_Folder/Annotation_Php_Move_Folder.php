<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Annotation\Model\Requests\MoveFolderRequest("annotationdocs1", "annotationdocs1\\annotationdocs1", CommonUtils::$MyStorage, CommonUtils::$MyStorage, true);
		$apiInstance->moveFolder($request);
		
		echo "Expected response type is Void: 'annotationdocs1' folder moved to 'annotationdocs1/annotationdocs1'.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>