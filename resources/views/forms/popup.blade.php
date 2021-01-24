<div class="modal fade" id="lawyerQuestion" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="d-flex justify-between" style="padding:5pt 10pt">
                    <div class=""><img class="d-flex img-circle avatar z-depth-1-half mr-3"
                            src="/assets/images/avatar-5.jpg" alt="Avatar"></div>
                    <div class="pt10 ml3">
                        <h6>Задать вопрос юристу бесплатно</h6>
                        <p>Оставить заявку на бесплатную консультацию по вашему вопросу</p>
                    </div>
                </div>
            </div>
            <!--Body-->
            <div class="modal-body">
                <form action="/lawyer-form-sidebar" method="POST" name="lawyerFormSidebar">
                    @csrf
                    <div class="form-group pop_modal">
                        <label for="contactName">Контактное лицо:</label>
                        <input type="text" class="form-control form-control-small" placeholder="Введите Ваше имя"
                            name="name">
                        <span class="text-danger" id="nameErrorSidebar"></span>
                    </div>

                    <div class="form-group">
                        <label for="email-input">Ваш email</label>
                        <input type="email" class="form-control" placeholder="Введите Ваш email" name="email">
                        <span class="text-danger" id="emailErrorSidebar"></span>
                    </div>
                    <div class="form-group pop_modal">
                        <label for="phone">Ваш телефон</label>
                        <input type="text" class="form-control" placeholder="Введите Ваш номер телефона" name="phone">
                        <span class="text-danger" id="phoneErrorSidebar"></span>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="category" id="hidden_input">
                    </div>
                    <div id="law-success-sidebar" class="success-btn"></div>
                    <div class="d-flex justify-between">
                        <div>
                            <input type="submit" class="btn btn-primary pop_modal pull-left " id="lawyer-btn-sidebar"
                                value="Отправить">
                        </div>
                        <div class="consent-text">
                            <span> Нажимая «Отправить» вы соглашаетесь с <a href="/storage/pdf/politika_confidence.pdf"
                                    target="_blank" class="underline">
                                    Политикой обработки персональных данных.</a>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
