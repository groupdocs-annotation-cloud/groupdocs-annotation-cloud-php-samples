<?php

class GetPages {
	public static function Run() { 
		$apiInstance = Utils::GetPreviewApiInstance();
		
		$fileInfo = new GroupDocs\Annotation\Model\FileInfo();
		$fileInfo->setFilePath("annotationdocs\\one-page.docx");

		$options = new GroupDocs\Annotation\Model\PreviewOptions();
		$options->setFileInfo($fileInfo);

		$request = new GroupDocs\Annotation\Model\Requests\GetPagesRequest($options);
		$response = $apiInstance->getPages($request);
	
		echo "GetPages: pages count = ", $response->getTotalCount();
	}
}
