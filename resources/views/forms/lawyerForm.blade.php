     <form action="/lawyer-form" method="POST" name="lawyerForm">
         @csrf
         <div class="col-md-6 justify-content-center" style="font-size:15px;">
             <div style="margin-top:5%;">
                 <span>
                     <i class="fa fa-question"></i> Кратко опишите проблему и
                     оставьте свои
                     контактные данные.</span>
             </div>

             <div style="padding-top:20px;">
                 <span>
                     <i class="fa fa-comments"></i> C вами
                     свяжется наш юрист и
                     ответит на ваши вопросы.</span>
             </div>
             <div style="padding-top:20px;">
                 <span>
                     <i class="fa fa-check-circle"></i> Вы получаете
                     развернутый
                     ответ юриста и знаете
                     как действовать дальше.</span>
             </div>
         </div>
         <div class="col-md-6">
             <div class="form-group">
                 <label for="contactName">Контактное лицо:</label>
                 <input type="text" class="form-control form-control-small" placeholder="Введите Ваше имя" name="name">
                 <span class="text-danger" id="nameErrorLaw"></span>
             </div>

             <div class="form-group">
                 <label for="phone">Ваш телефон</label>
                 <input type="text" class="form-control" placeholder="Введите Ваш номер телефона" name="phone"
                     id="phone">
                 <span class="text-danger" id="phoneErrorLaw"></span>
             </div>


             <div class="form-group">
                 <label for="textarea">Ваше сообщение</label>
                 <textarea class="form-control" cols="4" rows="7" placeholder="Введите сообщение"
                     name="message"></textarea>
                 <span class="text-danger" id="messageErrorLaw"></span>
             </div>

             <div class="form-group">
                 <div class="row">
                     <input required checked type="checkbox" id="rules_ok" class="check-box" name="consent">
                     <span>Ознакомлен(-а) и согласен
                         <a href="/storage/pdf/politika_conf.pdf" target="_blank" class="consent"><span
                                 class="link_color">с
                                 политикой обработки персональных данных</span>
                         </a></span>
                 </div>
                 <div>
                     <span class="text-danger" id="consentError"></span>
                 </div>
             </div>

             <div class="form-group mt-4 mb-4">
                 <div class="captcha">
                     <span>{!! captcha_img() !!}</span>
                     <button type="button" class="btn btn-danger" class="reload" id="reload">
                         &#x21bb;
                     </button>
                 </div>
             </div>
             <span class="text-danger" id="captchaErrorLaw"></span>
             <div class="form-group mb-4">
                 <input id="captcha" type="text" class="form-control" placeholder="Введите код с картинки"
                     name="captcha">
             </div>

             <input type="submit" class="form-group btn btn-primary" id="lawyer-btn" value="Отправить">
             <div id="law-success" class="success-btn"></div>
     </form>


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
