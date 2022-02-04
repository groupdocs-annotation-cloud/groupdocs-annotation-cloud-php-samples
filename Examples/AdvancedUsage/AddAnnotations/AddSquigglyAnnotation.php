<?php

class AddSquigglyAnnotation {
	public static function Run() { 
		$apiInstance = Utils::GetAnnotateApiInstance();
		
		$a = new GroupDocs\Annotation\Model\AnnotationInfo();

		$pt1 = new GroupDocs\Annotation\Model\Point();
		$pt1->setX(80);
		$pt1->setY(730);
		$pt2 = new GroupDocs\Annotation\Model\Point();
		$pt2->setX(80);
		$pt2->setY(730);		
		$pt3 = new GroupDocs\Annotation\Model\Point();
		$pt3->setX(80);
		$pt3->setY(730);		
		$pt4 = new GroupDocs\Annotation\Model\Point();
		$pt4->setX(80);
		$pt4->setY(730);		
		$a->setPoints([$pt1, $pt2, $pt3, $pt4]);

		$a->setPageNumber(0);
		$a->setFontColor(1201033);
		$a->setSquigglyColor(1422623);
		$a->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_TEXT_SQUIGGLY);
		$a->setText("This is squiggly annotation");
		$a->setCreatorName("Anonym A.");   

		$fileInfo = new GroupDocs\Annotation\Model\FileInfo();
		$fileInfo->setFilePath("annotationdocs\\one-page.docx");

		$options = new GroupDocs\Annotation\Model\AnnotateOptions();
		$options->setFileInfo($fileInfo);
		$options->setAnnotations([$a]);
		$options->setOutputPath("Output\\output.docx");

		$request = new GroupDocs\Annotation\Model\Requests\annotateRequest($options);
		$result = $apiInstance->annotate($request);

		echo "AddSquigglyAnnotation: Squiggly annotation added: " . $result->getHref();
	}
}
