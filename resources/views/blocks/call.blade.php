<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle"
    aria-hidden="true">

    <div class="modal-dialog" role="document">
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

                    <span>Вашe имя</span>
                    <input type="text" required id="user_name" name="name" placeholder="Ваше Имя">
                    <span class="text-danger" id="nameError"></span>

                    <span>Ваш телефон</span>
                    <input id="user_phone" required type="text" name="phone" placeholder="+7">
                    <span class="text-danger" id="phoneError"></span>
                    <p class="success_call text-center"></p>
                </div>

                <div class="modal-footer">
                    <input type="button" value="Отправить" id="btn_call">
                </div>
            </form>
        </div>
    </div>
</div>
