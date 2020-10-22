<section id="subscribe_section" class="subscribe_section">
<div class="row">
                <form action="/subscribe" method="post" name="subForm" >
                @csrf
                <div class="form-group ">
                <label for="formGroupInputLarge">
                    <h3><span class="red-color">Подписка</span> на наши новости<h3>
                </label>
                <div class="form-group">
                    <input type="email" name="email" class="form-control input-lg"
                    placeholder="Ваш email">
                </div>
                <div id="sub_success"></div>
                <div class="form-group ">
                    <input type="submit" value="Подписаться" class="btn btn-large blue subscription_btn">
                </div>
                <!-- <div class="col-sm-2"></div> -->
                </div>
                </form>
    </div>
</section>

<!-- Subscriber Section -->
