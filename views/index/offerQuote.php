<script src="<?php echo $data['publicDir']; ?>/js/bot_trap.js"></script>
<div class="form-header">
    <h1 class="cover-heading">Предложить цитату</h1>
    <p>* — обязательные для заполнения поля</p>
</div>
<form class="text-left" action="/offer/addOffer" method="POST">
    <div class="form-group" id="email">
        <label for="email">email</label>
        <input name="email" type="text" class="form-control" placeholder="" value="">
    </div>
    <div class="form-group">
        <label for="quoteText">Текст цитаты *</label>
        <textarea name="quoteText" class="form-control" rows="6" id="quoteText"><?php echo @$_POST['quoteText']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="authorQuote">Автор</label>
        <input name="authorQuote" type="text" class="form-control" id="authorQuote" placeholder="Автор" value="<?php echo @$_POST['authorQuote']; ?>">
    </div>
    <div class="form-group">
        <label for="sourceQuote">Источник</label>
        <input name="sourceQuote" type="text" class="form-control" id="sourceQuote" placeholder="Источник" value="<?php echo @$_POST['sourceQuote']; ?>">
    </div>
    <div class="form-group">
        <label for="comment">Комментарий для администратора</label>
        <textarea name="comment" class="form-control" rows="3" id="comment"><?php echo @$_POST['comment']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="authorOffer">Ваш никнейм или ссылка на профиль</label>
        <input name="authorOffer" type="text" class="form-control" id="authorOffer" placeholder="Представьтесь" value="<?php echo @$_POST['authorOffer']; ?>">
    </div>
    <div class="form-group captcha">
        <label for="comment">Каптча</label>
        <br>
        <img src="/quote/getcaptchaimg?uri=<?php echo urlencode($data['thisURI']); ?>" id="" onclick="this.src = '/quote/getcaptchaimg?uri=<?php echo urlencode($data['thisURI']); ?>';" title="Обновить картинку" class="captcha-img">
        <input type="text" name="captcha" class="form-control" placeholder="Введите код с картинки">
    </div>
    <button type="submit" class="btn btn-default">Отправить</button>
</form>