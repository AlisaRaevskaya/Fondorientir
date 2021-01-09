<div class="popup-box hidden">
    <h5>Подтвердить удаление</h5>
    @csrf
    <div>
        <label for="popup_textarea">Сообщение:</label>
        <textarea class="form-control" id="popup_textarea" name="message" placeholder="Сообщение:" rows="4"
            cols='7'></textarea>
    </div>
    <div id="w-success"></div>
    <div class="close">X</div>
    <div>
        <input type="submit" class="btn btn-primary btn-web-feedback" value="Отправить">
    </div>
    </form>
</div>
