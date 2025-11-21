<?php



use Site\Feedback\FeedbackTable;

class FeedbackFormComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        if ($_POST['SEND'] === 'Y') {
            FeedbackTable::add([
                'USER_NAME' => $_POST['NAME'],
                'MESSAGE'  => $_POST['MESSAGE'],
                'RATTING'  => (int)$_POST['RATTING'],
                'ACTIVE'   => 'N',
            ]);
            $this->arResult['SUCCESS'] = true;
        }

        $this->includeComponentTemplate();
    }
}