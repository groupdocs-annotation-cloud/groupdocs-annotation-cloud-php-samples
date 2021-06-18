<?php
// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

include(__DIR__ . '\Utils.php');
include(__DIR__ . '\BasicUsage\GetSupportedFormats.php');
include(__DIR__ . '\BasicUsage\GetDocumentInformation.php');
include(__DIR__ . '\BasicUsage\WorkingWithStorage\GetDiscUsage.php');
include(__DIR__ . '\BasicUsage\WorkingWithStorage\GetFileVersions.php');
include(__DIR__ . '\BasicUsage\WorkingWithStorage\ObjectExists.php');
include(__DIR__ . '\BasicUsage\WorkingWithStorage\StorageExist.php');

include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddAreaAnnotation.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddArrowAnnotation.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddDistanceAnnotation.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddMultipleAnnotations.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddPointAnnotation.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddPolylineAnnotation.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddTextFieldAnnotation.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddTextRedactionAnnotation.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddTextReplacementAnnotation.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddTextStrikeoutAnnotation.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddTextUnderlineAnnotation.php');
include(__DIR__ . '\AdvancedUsage\AddAnnotations\AddWatermarkAnnotation.php');

include(__DIR__ . '\AdvancedUsage\AddAnnotationDirect\AddAnnotationDirect.php');
include(__DIR__ . '\AdvancedUsage\ExtractAnnotations\ExtractAnnotations.php');
include(__DIR__ . '\AdvancedUsage\DeleteAnnotations\DeleteAnnotations.php');
include(__DIR__ . '\AdvancedUsage\DocumentPreview\GetPages.php');
include(__DIR__ . '\AdvancedUsage\DocumentPreview\DeletePages.php');

// Uploading sample files into storage
Utils::UploadResources();

// Basic usage Examples

GetSupportedFormats::Run();
GetDocumentInformation::Run();

GetDiscUsage::Run();
GetFileVersions::Run();
ObjectExists::Run();
StorageExist::Run();

// Advanced usage Examples

AddAreaAnnotation::Run();
AddArrowAnnotation::Run();
AddDistanceAnnotation::Run();
AddMultipleAnnotations::Run();
AddPointAnnotation::Run();
AddPolylineAnnotation::Run();
AddTextFieldAnnotation::Run();
AddTextRedactionAnnotation::Run();
AddTextReplacementAnnotation::Run();
AddTextStrikeoutAnnotation::Run();
AddTextUnderlineAnnotation::Run();
AddWatermarkAnnotation::Run();

AddAnnotationDirect::Run();
ExtractAnnotations::Run();
DeleteAnnotations::Run();

GetPages::Run();
DeletePages::Run();
