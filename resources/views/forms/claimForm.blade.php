<div class="form-wrapper col-md-11" style="margin-top:30px; ">
    <form action="/claim-form" method="POST" name="claimForm">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Контактное лицо">
            <span class="text-danger" id="nameError"></span>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Электронный адрес">
            <span class="text-danger" id="emailError"></span>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Ваш контактный телефон">
            <span class="text-danger" id="phoneError"></span>
        </div>

        <div class="form-group shadow-textarea">
            <textarea class="form-control rounded-0" id="formControlTextarea" rows="5" cols="5"
                placeholder="Введите текст сообщения" name="message"></textarea>
            <span class="text-danger" id="messageError"></span>
        </div>
        <div>
            <input type="submit"class="btn btn-primary" id="btn-claim" value="Отправить">
        </div>
        <div class="text-bold" id="claim-success"></div>
    </form>
</div>

