<div>
    <div class="media mt-3 shadow-textarea blue">

    <div class="row" style="padding-left:20pt">
    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="/assets/images/avatar-5.jpg"alt="Avatar">
    <h1>Задать вопрос юристу бесплатно</h1>
    </div>

    <form action="/lawyer-question" method="POST" style="padding-left:20px">
    @csrf
    <div class="form-group">
    <input type="text" name="name" placeholder="Контактное лицо">
    </div>

    <div class="form-group">
    <input type="email" name="email" placeholder="Ваш email">
    </div>

    <div class="form-group shadow-textarea">
    <label for="formControlTextarea"></label>
    <textarea class="form-control rounded-0" id="formControlTextarea" rows="3" cols="5"
    placeholder="Задайте свой вопрос"></textarea>
    </div>
    <div id="law_success"></div>

    <input type="submit" class="form-group black btn-law" value="Отправить">

    </form>

    </div>
  </div>


