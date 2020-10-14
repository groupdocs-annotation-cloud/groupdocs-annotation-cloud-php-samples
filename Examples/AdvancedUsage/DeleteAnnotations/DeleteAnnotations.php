<?php

class DeleteAnnotations {
	public static function Run() { 
		$apiInstance = Utils::GetAnnotateApiInstance();
		
		$request = new GroupDocs\Annotation\Model\Requests\DeleteAnnotationsRequest("annotationdocs\\one-page.docx");
		$apiInstance->deleteAnnotations($request);
	
		echo "DeleteAnnotations: Annotations deleted. ";
	}
}
