<?php if ($arResult['SUCCSESS']): ?>
    <div class="alert alert-succsess">Спасибо! Ваш отзыв отправлен на модерацию.</div>
<?php endif;?>

<form method="post">
    <input type="hidden" name="SEND" value="Y">

    <label for="">Ваше имя</label>
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