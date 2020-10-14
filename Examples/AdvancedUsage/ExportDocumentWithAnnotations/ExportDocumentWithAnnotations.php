<?php

class ExportDocumentWithAnnotations {
	public static function Run() { 
		$apiInstance = Utils::GetAnnotateApiInstance();
		
		$request = new GroupDocs\Annotation\Model\Requests\GetExportRequest("annotationdocs\\one-page.docx", null, null, null, null, "");
		$response = $apiInstance->getExport($request);
	
		echo "ExportDocumentWithAnnotations: file size = ", $response->getSize();
	}
}
