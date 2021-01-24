<div class="modal fade" id="callModalLong" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle"
    aria-hidden="true">

    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLongTitle">Заказать звонок менеджера</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="/call" method="POST" name="callForm">
                @csrf
                <div class="modal-body">
                    <div class="">
                        <label class="control-label pt10" for="user_name">Вашe имя</label>
                        <input type="text" class="form-control" required id="user_name" name="name"
                            placeholder="Ваше Имя">
                        <span class="text-danger" id="nameError"></span>
                    </div>
                    <div class="">
                        <label class="control-label pt10" for="user_phone">Ваш контактный телефон</label>
                        <input id="user_phone" class="form-control" required type="text" name="phone"
                            placeholder="Ваш номер телефона">
                        <span class="text-danger" id="phoneError"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="block pull-left">Нажимая «Отправить» вы соглашаетесь с
                        <a href="/storage/pdf/politika_confidence.pdf" target="_blank" class="consent underline">
                            Политикой обработки персональных данных.</a>
                    </p>
                    <p class="success_call text-center success-btn"></p>

                    <input type="button" class="btn btn-primary pull-right" value="Отправить" id="btn_call">
                </div>
            </form>
        </div>
    </div>
</div>
