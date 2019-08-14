<?php

// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

// Common class to hold the constants and static functions
class CommonUtils {

    // TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required)
    static $AppSid = 'XXXXX-XXXXX-XXXXX-XXXXX-XXXXX';
    static $AppKey = 'XXXXXXXXXXXXXXXXXXXX';
    static $ApiBaseUrl = 'https://api.groupdocs.cloud';
	static $MyStorage = 'XXXXX';

    // Getting the Annotate API Instance
    public static function GetAnnotateApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Annotation\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new AnnotateApi instance
        return new GroupDocs\Annotation\AnnotateApi($configuration);
    }

    // Getting the Preview API Instance
    public static function GetPreviewApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Annotation\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new AnnotateApi instance
        return new GroupDocs\Annotation\PreviewApi($configuration);
    }

    // Getting the Info API Instance
    public static function GetInfoApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Annotation\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new InfoApi instance
        return new GroupDocs\Annotation\InfoApi($configuration);
    }

     // Getting the Annotation StorageAPI API Instance
    public static function GetStorageApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Annotation\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new StorageApi instance
        return new GroupDocs\Annotation\StorageApi($configuration);
    }

     // Getting the Annotation FolderAPI API Instance
    public static function GetFolderApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Annotation\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new FolderApi instance
        return new GroupDocs\Annotation\FolderApi($configuration);
    }

	// Getting the Annotation FileAPI API Instance
    public static function GetFileApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Annotation\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new FileApi instance
        return new GroupDocs\Annotation\FileApi($configuration);
    }
}
