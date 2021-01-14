<div class="col-md-11">
    <h1>Бесплатная онлайн консультация</h1>
    <div style="border:1px solid  #0275d8;padding:0;border-radius:3pt;
        overflow:hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">

        <div class="row justify-content-center" style="display:flex;justify-content:space-around;
        background-color:#0275d8;padding:15px;">

            <div class=""><img class="d-flex img-circle avatar z-depth-1-half mr-3 img-responsive"
                    src="/assets/images/avatar-5.jpg" alt="Avatar"></div>
            <div class="h4 ml30 text-justify" style="color:white;">
                Вы можете получить консультацию нашего миграционного юриста
                бесплатно, заполнив форму:
            </div>
        </div>

        <form action="/lawyer-form" method="POST" name="lawyerForm">
            @csrf
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="name" class="h4">Контактное лицо</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше имя"
                        required>
                    <span class="text-danger" id="nameErrorLaw"></span>
                </div>
                <div class="form-group col-sm-6">
                    <label for="phoneContact" class="h4">Контактный телефон</label>
                    <input type="text" class="form-control" name="phone" id="phoneContact"
                        placeholder="Введите ваш номер телефона" required>
                    <span class="text-danger" id="phoneErrorLaw"></span>
                </div>
            </div>
            <div class="form-group" style="padding:0 10pt">
                <label for="message" class="h4">Ваш вопрос</label>
                <textarea class="form-control shadow-textarea" cols="4" rows="5"
                    placeholder="Опишите ваш вопрос в свободной форме." name="message"></textarea>
                <span class="text-danger" id="messageErrorLaw"></span>
            </div>
            <input type="submit" class="form-group btn btn-primary" id="lawyer-btn" style="margin:0 0 10pt 10pt"
                value="Отправить">
            <div id="law-success" class="success-btn"></div>
        </form>
    </div>
</div>
