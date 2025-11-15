<?php

require($_SERVER['DOCUMENT_ROOT']. '/bitrix/modules/main/include/prolog_admin.php');

use Site\Feedback\FeedbackTable;

$APPLICATION->SetTitle("Отзывы о сайте");
$result  = FeedbackTable::getList([

    'order' => ['DATE_CREATE' => 'DESC'],

]);
?>
<table class="adm-list-table">
    <tr class="adm-list-table-header">
        <th>ID</th>
        <th>Имя</th>
        <th>Сообщение</th>
        <th>Дата</th>
        <th>Активность</th>
    </tr>

<?php while ($row = $result->fetch()): ?>

    <tr>
        <td><?=$row['ID']?></td>
        <td><?= htmlspecialcharsbx($row['USER_NAME']) ?></td>
        <td><?= htmlspecialcharsbx($row['MESSAGE']) ?></td>
        <td><?= $row['DATE_CREATE']?></td>
        <td><?= $row['ACTIVE']?></td>
    </tr>

<?php endwhile; ?>



</table>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/epilog_admin.php');