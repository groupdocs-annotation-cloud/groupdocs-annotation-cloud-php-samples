<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetAnnotateApiInstance();
	
	$a = new GroupDocs\Annotation\Model\AnnotationInfo();
	$pt = new GroupDocs\Annotation\Model\Point();
	$pt->setX(852);
	$pt->setY(59.388262910798119);
	$a->setAnnotationPosition($pt);
	$a->setPageNumber(2);
	$a->setFontColor(1201033);
	$a->setFontSize(12);
	$a->setOpacity(0.7);
	$a->setType(GroupDocs\Annotation\Model\AnnotationInfo::TYPE_TEXT_STRIKEOUT);
	$a->setText("This is text strikeout annotation");
	$a->setCreatorName("Anonym A.");   

	$request = new GroupDocs\Annotation\Model\Requests\postAnnotationsRequest("annotationdocs\\ten-pages.docx", [$a]);
	$apiInstance->postAnnotations($request);

    echo "Expected response type is void: Text Strikeout Annotation added.";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}