<section id="subscribe_section" class="subscribe_section">
<div class="row">
                <form action="/subscribe" method="post" name="subForm" >
                @csrf
                <div class="form-group ">

                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                    <h1><span class="red-color">Подпишитесь </span> на наши новости<h1>
                </label>

                <div class="form-group" class="col-sm-3">
                    <input type="email" name="email" class="form-control input-lg"
                    placeholder="Ваш email">
                </div>
                <div id="sub_success"></div>

                <div class="form-group" class="col-sm-1">
                    <input type="submit" value="Подписаться" class="btn btn-large blue subscription_btn">
                </div>

                <div class="col-sm-2"></div>
                </div>
                </form>
    </div>
</section>

<!-- Subscriber Section -->
