<div class="shadow-textarea blue">

    <div class="row" style="padding:5pt 20pt">
        <h1>
            <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="/assets/images/avatar-5.jpg"
                alt="Avatar">
            Задать вопрос юристу бесплатно
        </h1>
    </div>

    <form action="/lawyer-question" method="POST" style="padding:5px 10px">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Контактное лицо">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Ваш email">
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
