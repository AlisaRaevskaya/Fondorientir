
<div class="for_form">

    <h5>Отправить сообщение администрации сайта</h5>
    <form action="/website-feedback" method="POST" name="problemForm">
        @csrf
        <div class="form-group">
            <label for="contactName">Контактное лицо:</label>
            <input type="text" class="form-control" id="contactName" placeholder="Контактное лицо"
                name="name">
        </div>
        <div>

            <label for="exampleInputPhone">Телефон:</label>
            <input type="tel" class="form-control" id="exampleInputPhone" placeholder="Телефон:"
                name="phone">
        </div>

        <div>
            <label for="exInputEmail">E-mail:</label>
            <input type="email" class="form-control" id="exInputEmail" aria-describedby="emailHelp"
                placeholder="Enter email" name="email">
        </div>

        <div>
            <label for="popup_textarea1">Сообщение:</label>
            <textarea class="form-control" id="popup_textarea1" name="message"
                placeholder="Сообщение:" rows="4" cols='7'></textarea>
        </div>

        <div id="w_success"></div>

        <div>
            <input type="submit" class="btn btn-primary btn-web-feedback" value="Отправить">
        </div>
    </form>
</div>
