<?php

class GetAnnotations {
	public static function Run() { 
		$apiInstance = Utils::GetAnnotateApiInstance();
		
		$request = new GroupDocs\Annotation\Model\Requests\GetImportRequest("annotationdocs\\one-page.docx");
		$response = $apiInstance->getImport($request);
	
		echo "GetAnnotations: annotations count = ", count($response);
	}
}
