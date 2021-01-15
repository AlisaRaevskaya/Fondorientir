<div class="col-md-11 faq_form">
    <h1>Бесплатная онлайн консультация</h1>
    <div class="faq_form_box">
        <div class="row justify-content-center faq_form_box_item">

            <div class="faq_form_box_item_img_block">
                <img class="d-flex img-circle avatar z-depth-1-half mr-3 img-responsive"
                    src="/assets/images/avatar-5.jpg" alt="Avatar">
            </div>
            <div class="h4 ml30 text-justify" style="color:white;">
                Вы можете получить консультацию нашего миграционного юриста
                бесплатно, заполнив форму:
            </div>
        </div>

        <form action="/lawyer-form-faq" method="POST" name="lawyerFormFaq">
            @csrf
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="nameErrorLawFaq" class="h4">Контактное лицо</label>
                    <input type="text" class="form-control" name="name" id="nameErrorLaw" placeholder="Введите ваше имя"
                        required>
                    <span class="text-danger" id="nameErrorLawFaq"></span>
                </div>
                <div class="form-group col-sm-6">
                    <label for="phoneErrorLawFaq" class="h4">Контактный телефон</label>
                    <input type="text" class="form-control" name="phone" id="phoneErrorLaw"
                        placeholder="Введите ваш номер телефона" required>
                    <span class="text-danger" id="phoneErrorLawFaq"></span>
                </div>
            </div>
            <div class="form-group" style="padding:0 10pt">
                <label for="messageErrorLawFaq" class="h4">Ваш вопрос</label>
                <textarea class="form-control shadow-textarea" cols="4" rows="5"
                    placeholder="Опишите ваш вопрос в свободной форме." name="message"></textarea>
                <span class="text-danger" id="messageErrorLawFaq"></span>
            </div>
            <div id="law-success-faq" class="success-btn form-group ml10"></div>
            <input type="submit" class="form-group btn btn-primary" id="lawyer-btn-faq" style="margin:0 0 10pt 10pt"
                value="Отправить">

        </form>
    </div>
</div>
