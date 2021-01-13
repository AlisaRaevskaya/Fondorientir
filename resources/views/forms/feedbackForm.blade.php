<form class="form-horizontal" action="{{ route('reception-form') }}" method="POST" name="feedbackForm">
    @csrf
    <div class="form-group">
        <label class="control-label col-xs-3" for="lastName">Фамилия<span class="color_red">*</span></label>
        <div class="col-xs-9">
            <input type="text" required class="form-control" id="lastName" name="lastName"
                placeholder="Введите фамилию">
            <span class="text-danger" id="lastNameError"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" for="firstName">Имя<span class="color_red">*</span></label>
        <div class="col-xs-9">
            <input type="text" required class="form-control" id="firstName" name="firstName" placeholder="Введите имя">
            <span class="text-danger" id="firstNameError"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" for="fatherName">Отчество</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Введите отчество">
            <span class="text-danger" id="fatherNameError"></span>
        </div>
    </div>

    <div class="form-group job_div">
        <label class="control-label col-xs-3" for="job" id="job_label">Место работы или учебы</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="job" name="job" placeholder="Введите Ваше Место работы/учебы">
            <span class="text-danger" id="jobError"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber" id="phone_label">Контактный телефон<span
                class="color_red">*</span>
        </label>
        <div class="col-xs-9">
            <input type="tel" required class="form-control" id="phoneNumber" name="phone"
                placeholder="Введите Ваш номер телефона">
            <span class="text-danger phoneError"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="inputEmail" id="email_label">Электронная почта </label>
        <div class="col-xs-9">
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Введите Ваш Email">
            <span class="text-danger" id="emailError"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="yourMessage">Ваш вопрос<span class="color_red">*</span></label>
        <div class="col-xs-9">
            <textarea rows="9" required class="form-control" id="yourMessage" name="message"
                placeholder="Введите Ваш вопрос"></textarea>
            <span class="text-danger" id="messageError"></span>
        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input required checked type="checkbox" id="rules_ok" class="check-box" name="consent">
            <label for="rules_ok">Ознакомлен(-а) и согласен
                <a href="/storage/pdf/soglasie.pdf" target="_blank" class="consent"> <span class="link_color">на
                        обработку моих персональных данных</span>
                </a></label>
            <div>
                <span class="text-danger" id="consentError"></span>
            </div>
        </div>
    </div>

    <div class="form-group mt-4 mb-4">
        <div class="captcha col-xs-offset-3 col-xs-9">
            <span>{!! captcha_img() !!}</span>
            <button type="button" class="btn btn-danger" class="reload" id="reload">
                &#x21bb;
            </button>
        </div>

    </div>

    <span class="text-danger" id="captchaError"></span>

    <div class="form-group mt-4 mb-4">
        <div class="col-xs-offset-3 col-xs-9">
            <input id="captcha" type="text" class="form-control" placeholder="Введите код с картинки" name="captcha">
        </div>
    </div>

    <br />
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary g-recaptcha" id="btn-messages" value="Отправить">
        </div>
    </div>
</form>
<div class="form-group">
    <div class="col-xs-offset-3 col-xs-9">
        <span class="text-center" id="success_messages">
        </span>
    </div>
</div>
<script type="text/javascript">
    $('#reload').on("click", function() {
        $.ajax({
            type: 'GET',
            url: '/support/reload-captcha',
            success: function(data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

</script>
