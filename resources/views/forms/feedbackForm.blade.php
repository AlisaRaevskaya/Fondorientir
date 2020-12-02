<div>
    <form class="form-horizontal" action="/submit" method="POST" name="feedbackForm">
        @csrf

        <div class="form-group">
            <label class="control-label col-xs-3" for="lastName">Фамилия*:</label>
            <div class="col-xs-9">
                <input type="text" required class="form-control" id="lastName" name="lastName"
                    placeholder="Введите фамилию">
                <span class="text-danger" id="firstNameError"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="firstName">Имя*:</label>
            <div class="col-xs-9">
                <input type="text" required class="form-control" id="firstName" name="firstName"
                    placeholder="Введите имя">
                <span class="text-danger" id="lastNameError"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="fatherName">Отчество*:</label>
            <div class="col-xs-9">
                <input type="text" required class="form-control" id="fatherName" name="fatherName"
                    placeholder="Введите отчество">
                <span class="text-danger" id="fatherNameError"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="address">Почтовый адрес*:</label>
            <div class="col-xs-9">
                <input type="text" required class="form-control" id="address" name="address"
                    placeholder="Почтовый адрес">
                <span class="text-danger" id="addressError"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="job">Место работы или учебы :</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="inputPasswordjob" name="job"
                    placeholder="Место работы или учебы">
                <span class="text-danger" id="jobError"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="phoneNumber">Контактный телефон*:</label>
            <div class="col-xs-9">
                <input type="tel" required class="form-control" id="phoneNumber" name="phone"
                    placeholder="Введите номер телефона">
                <span class="text-danger" id="phoneError"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">Электронная почта:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                <span class="text-danger" id="emailError"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="yourMessage">Ваш вопрос*:</label>
            <div class="col-xs-9">
                <textarea rows="9" required class="form-control" id="yourMessage" name="message"
                    placeholder="Ваш вопрос"></textarea>
                     <span class="text-danger" id="messageError"></span>
            </div>
        </div>


        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input required checked type="checkbox" id="rules_ok" class="check-box" name="consent">
                <label for="rules_ok">Ознакомлен(-а) и согласен
                    <a href="/assets/dw/soglasie.pdf" target="_blank" class="consent"> на
                        обработку моих данных
                    </a></label>
            </div>
        </div>
        <br />
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary g-recaptcha" id="btn-messages" value="Отправить"
                    data-sitekey="6LedE94ZAAAAAOf6iuTtMNxzWxMKX18zub2NWPUg" data-callback='onSubmit'
                    data-action='submit'>
            </div>
        </div>
    </form>
    <div class="text-center" id="success_messages" style="padding-left:30px;"></div>
</div>
