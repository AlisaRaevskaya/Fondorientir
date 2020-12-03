<div class="form-wrapper" style="margin-top:30px;">
    <form action ="/claim-form"  method="POST" name="claimForm">
        @csrf
        <div class="col-md-6 justify-content-center" style="font-size:15px;">
            <div style="margin-top:5%;">
                <span>
                    <i class="fa fa-question"></i> Кратко опишите проблему и
                    оставьте свои
                    контактные данные</span>
            </div>

            <div style="padding-top:20px;">
                <span>
                    <i class="fa fa-comments"></i> C вами
                    свяжется наш юрист и
                    ответит на ваши вопросы</span>
            </div>
            <div style="padding-top:20px;">
                <span>
                    <i class="fa fa-check-circle"></i> Вы получаете
                    развернутый
                    ответ юриста и знаете
                    как действовать дальше</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="contactName">Контактное лицо:</label>
                <input type="text" class="form-control form-control-small" placeholder="Ваше имя" name="name">
                <span class="text-danger" id="nameError"></span>
            </div>

            <div class="form-group">
                <label for="phone">Ваш телефон</label>
                <input type="text" class="form-control" placeholder="Введите номер телефона для связи" name="phone"
                    id="phone">
                <span class="text-danger" id="phoneError"></span>
            </div>

            <div class="form-group">
                <label for="email-input">Ваш email</label>
                <input type="email" class="form-control" placeholder="Введите email" name="email"
                    id="email-input">
                <span class="text-danger" id="emailError"></span>
            </div>

            <div class="form-group">
                <label for="textarea">Ваше сообщение</label>
                <textarea class="form-control" cols="4" rows="7" placeholder="Введите сообщение" name="message"></textarea>
                <span class="text-danger" id="messageError"></span>
            </div>

            <button class="btn btn-primary btn-block btn-small" id="btn-claim">Отправить</button>

            <div class="text-bold" id="claim-success"></div>
        </div>
    </form>
</div>
   <script src="/assets/js/ajax/claim-ajax.js"></script>
