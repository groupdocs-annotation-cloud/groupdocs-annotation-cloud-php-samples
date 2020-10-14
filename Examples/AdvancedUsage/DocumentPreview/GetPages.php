<?php

class GetPages {
	public static function Run() { 
		$apiInstance = Utils::GetPreviewApiInstance();
		
		$request = new GroupDocs\Annotation\Model\Requests\GetPagesRequest("annotationdocs\\one-page.docx");
		$response = $apiInstance->getPages($request);
	
		echo "GetPages: pages count = ", $response->getTotalCount();
	}
}
