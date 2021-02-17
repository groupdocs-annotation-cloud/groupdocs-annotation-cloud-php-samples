<?php

class DeleteAnnotations {
	public static function Run() { 
		$apiInstance = Utils::GetAnnotateApiInstance();
		
		$fileInfo = new GroupDocs\Annotation\Model\FileInfo();
		$fileInfo->setFilePath("input\\input.docx");

		$options = new GroupDocs\Annotation\Model\RemoveOptions();
		$options->setFileInfo($fileInfo);
		$options->setAnnotationIds([1, 2, 3]);
		$options->setOutputPath("Output\\output.docx");

		$request = new GroupDocs\Annotation\Model\Requests\removeAnnotationsRequest($options);
		$result = $apiInstance->removeAnnotations($request);
	
		echo "DeleteAnnotations: Annotations deleted. " . $result->getHref();
	}
}
