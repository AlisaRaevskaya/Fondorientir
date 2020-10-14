
<form class="form-horizontal" action ="/submit" method="post">
@csrf
  <div class="form-group">
    <label class="control-label col-xs-3" for="lastName">Фамилия*:</label>
    <div class="col-xs-9">
      <input type="text" required class="form-control"
      id="lastName"name="lastName" placeholder="Введите фамилию">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-xs-3" for="firstName">Имя*:</label>
    <div class="col-xs-9">
      <input type="text" required class="form-control"
      id="firstName" name="firstName" placeholder="Введите имя">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-xs-3" for="fatherName">Отчество*:</label>
    <div class="col-xs-9">
      <input type="text" required class="form-control" id="fatherName"
      name="fatherName" placeholder="Введите отчество">
    </div>
  </div>

  <div class="form-group">
  <div class="form-group">
    <label class="control-label col-xs-3" for="address">Почтовый адрес:</label>
    <div class="col-xs-9">
      <input type="text" required class="form-control" id="address" name="address" placeholder="Почтовый адрес">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-3" for="job">Место работы или учебы :</label>
    <div class="col-xs-9">
      <input type="text" required class="form-control" id="inputPasswordjob" name="job" placeholder="Место работы или учебы">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-xs-3" for="phoneNumber">Контактный телефон:</label>
    <div class="col-xs-9">
      <input type="tel" required class="form-control" id="phoneNumber"name="phone"  placeholder="Введите номер телефона">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-3" for="inputEmail">Электронная почта*:</label>
    <div class="col-xs-9">
      <input type="email" required class="form-control" id="inputEmail" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-3" for="yourMessage">Ваш вопрос*:</label>
    <div class="col-xs-9">
      <textarea rows="9" required class="form-control" id="yourMessage"
      name="message" placeholder="Ваш вопрос"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-3 col-xs-9">
      <label class="checkbox-inline">
        <input type="checkbox" checked name="sendbyemail"> Я хочу получить ответ по электронной почте.
      </label>
    </div>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-3 col-xs-9">
      <label class="checkbox-inline">
        <input type="checkbox" checked name="publish">Я не против, чтобы мой вопрос был опубликован.
      </label>
    </div>
  </div>
  <br />

  <div class="form-group">
    <div class="col-xs-offset-3 col-xs-9">
      <input type="submit" class="btn btn-primary btn-messages" value="Отправить">
    </div>
  </div>

  <div id="success"></div>

</form>
