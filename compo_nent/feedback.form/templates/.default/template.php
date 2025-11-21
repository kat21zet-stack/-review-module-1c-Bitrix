<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>


<div class="feedback-form">
<?php if ($arResult['SUCCSESS']): ?>
    <div class="alert alert-succsess">Спасибо! Ваш отзыв отправлен на модерацию.</div>
<?php endif;?>

<?php if(!empty($arResult['ERRORS'])):?>
    <div style="color:red; margin-bottom: 10px;">
        <?php foreach($arResult['ERRORS'] as $error):?>
            <div><?=htmlspecialcharsbx($error);?></div>
        <?php endforeach;?>
    </div>
<?php endif;?>

<form method="post">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="SEND" value="Y">

    <label for="">Ваше имя</label><br>
    <input type="text" name="NAME" required>

    <label for="">Отзыв</label>
    <textarea name="MESSAGE" required></textarea>

    <label for="">Оценка</label>
    <select name="RATTING">
        <option value="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
    </select>

    <button type="submit">Отправить</button>

</form>

</div>