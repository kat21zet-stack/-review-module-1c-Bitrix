<?php
use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses('sitefeedback', [

    'Site\\Feedback\\FeedbackTable' => 'lib\feedbacktable.php',

]);