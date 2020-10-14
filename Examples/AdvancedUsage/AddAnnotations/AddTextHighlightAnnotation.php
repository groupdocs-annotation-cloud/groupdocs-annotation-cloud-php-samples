<?php

class AddTextHighlightAnnotation {
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
		$a->setBackgroundColor(65535);
		$a->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_TEXT_HIGHLIGHT);
		$a->setText("This is text highlight annotation");
		$a->setCreatorName("Anonym A.");   

		$request = new GroupDocs\Annotation\Model\Requests\postAnnotationsRequest("annotationdocs\\one-page.docx", [$a]);
		$apiInstance->postAnnotations($request);

		echo "AddTextHighlightAnnotation: Text highlight Annotation added.";
	}
}
