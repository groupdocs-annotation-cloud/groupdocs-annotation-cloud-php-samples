<?php

class ExtractAnnotations {
	public static function Run() { 
		$apiInstance = Utils::GetAnnotateApiInstance();
		
		$fileInfo = new GroupDocs\Annotation\Model\FileInfo();
		$fileInfo->setFilePath("input\\input.docx");

		$request = new GroupDocs\Annotation\Model\Requests\extractRequest($fileInfo);
		$result = $apiInstance->extract($request);
	
		echo "GetAnnotations: annotations count = ", count($result);
	}
}
