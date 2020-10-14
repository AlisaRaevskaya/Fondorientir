<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form action="/subscribe" method="post" class="form-horizontal">
        @csrf
            <div class="form-group form-group-lg">

                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                    <span class="red-color">Подписка</span> на наши новости
                </label>

                <div class="col-sm-3">
                    <input type="email" id="subscribe" name="subscribe" class="form-control input-lg"
                    placeholder="Ваш email">
                </div>

                <p id="sub_success"></p>
                <div class="col-sm-1">

                    <input type="submit" value="Подписаться" class="btn blue subscription_btn">
                </div>

                <div class="col-sm-2"></div>
            </div>

        </form>
    </div>
</section>

<!-- Subscriber Section -->
