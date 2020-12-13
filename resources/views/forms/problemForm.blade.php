<div class="for_form">

    <h5>Отправить сообщение администрации сайта</h5>
    <form action="{{ route('problem-form') }}" method="POST" name="problemForm">
        @csrf
        <div class="form-group">
            <label for="contactName">Контактное лицо:</label>
            <input type="text" class="form-control" id="contactName" placeholder="Контактное лицо" name="name">
            <span class="text-danger" id="nameError"></span>
        </div>
        <div>

            <label for="exampleInputPhone">Телефон:</label>
            <input type="tel" class="form-control" id="exampleInputPhone" placeholder="Телефон:" name="phone">
            <span class="text-danger" id="phoneError"></span>
        </div>

        <div>
            <label for="exInputEmail">E-mail:</label>
            <input type="email" class="form-control" id="exInputEmail" aria-describedby="emailHelp"
                placeholder="Введите e-mail" name="email">
            <span class="text-danger" id="emailError"></span>
        </div>

        <div>
            <label for="popup_textarea1">Сообщение:</label>
            <textarea class="form-control" id="popup_textarea1" name="message" placeholder="Сообщение:" rows="4"
                cols='7'></textarea>
            <span class="text-danger" id="messageError"></span>
        </div>

        <div id="w_success" class="success-btn"></div>

        <div>
            <input type="submit" class="btn btn-primary" id="btn-problem" value="Отправить">
        </div>
    </form>
</div>
