<?php

use Bitrix\Main\Application;
use Bitrix\Main\ModuleManager;


class SiteFeedback extends CModule
{
    public $MODULE_ID ;
    public $MODULE_NAME;
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;

    public function __construct()
    {
        include(__DIR__ ."/version.php");
        $this->$MODULE_ID = "site.feedback";
        $this->MODULE_NAME = "Отзывы о сайте";
        $this->MODULE_VERSION = $arModuleVersion['VERSION'];
        $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
    }

    public function DoInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);
        $this->InstallDB();
        return true;
    }
    public function DoUnInstall()
    {
        ModuleManager::unregisterModule($this->MODULE_ID);
        $this->UninstallDB();
        return true;
    }

    public function InstallDB()
    {
        $conn = Application::getConnection();
        $sql = file_get_contents(__DIR__.'/db/install.sql');
        $conn->executeSqlBatch($sql);
    }

    public function UnInstallDB()
    {
        $conn = Application::getConnection();
        $conn->queryExecute("DROP TABLE IF EXISTS site_feedback");
    }

}