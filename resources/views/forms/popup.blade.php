<div class="modal fade" id="lawyerQuestion" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar" role="document">
        <!--Content-->
        <div class="modal-content " style="width:calc(80% - 2px);">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row justify-content-center" style="display:flex;padding:5pt 10pt">
                    <div class=""><img class="d-flex img-circle avatar z-depth-1-half mr-3 img-responsive"
                            src="/assets/images/avatar-5.jpg" alt="Avatar"></div>
                    <div>
                        <h6>Задать вопрос юристу бесплатно</h6>
                    </div>
                </div>
            </div>
            <!--Body-->
            <div class="modal-body">
                <form action="/lawyer-form-sidebar" method="POST" name="lawyerFormSidebar">
                    @csrf
                    <div class="form-group pop_modal">
                        <label for="contactName">Контактное лицо:</label>
                        <input type="text" class="form-control form-control-small" placeholder="Ваше имя" name="name">
                        <span class="text-danger" id="nameError"></span>
                    </div>

                    <div class="form-group">
                        <label for="email-input">Ваш email</label>
                        <input type="email" class="form-control" placeholder="Введите email" name="email">
                        <span class="text-danger" id="emailError"></span>
                    </div>
                    <div class="form-group pop_modal">
                        <label for="phone">Ваш телефон</label>
                        <input type="text" class="form-control" placeholder="Ваш номер телефона для связи" name="phone">
                        <span class="text-danger" id="phoneError"></span>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="category" id="hidden_input">
                    </div>
                    <div id="law-success-sidebar" class="success-btn"></div>
                    <input type="submit" class="btn btn-primary pop_modal" id="lawyer-btn-sidebar" value="Отправить">
                </form>
            </div>
        </div>
    </div>
</div>
