<?php

class DeletePages {
	public static function Run() { 
		$apiInstance = Utils::GetPreviewApiInstance();
		
		$fileInfo = new GroupDocs\Annotation\Model\FileInfo();
		$fileInfo->setFilePath("annotationdocs\\one-page.docx");

		$request = new GroupDocs\Annotation\Model\Requests\DeletePagesRequest($fileInfo);
		$apiInstance->deletePages($request);
	
		echo "DeletePages: pages deleted.";
	}
}
