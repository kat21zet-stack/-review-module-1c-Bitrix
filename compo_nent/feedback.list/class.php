<?php

use Site\Feedback\FeedbackTable;

class FeedbackListComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        $res = FeedbackTable::getList([
            'filter' => ['ACTIVE' => 'Y'],
            'order' => ['DATE_CREATE' => 'DESC'],
        ]);

        $this->arResult['ITEMS'] = $res->fetchAll();
        $this->includeComponentTemplate();
    }
}

