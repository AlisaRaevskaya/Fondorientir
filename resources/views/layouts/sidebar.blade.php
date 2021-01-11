<div class="col-md-3 sidebar">
    <div class="text-center item_center">
        <a href="{{ route('second_main') }}"><img class="img-responsive" src="{{ asset('storage/banner-4.png') }}"
                title="Онлайн Приемная" alt="banner.jpg"></a>
    </div>
    <div class="text-center sidebar_fond_img">
        <a href="https://президентскиегранты.рф/"><img src="{{ asset('storage/fond.png') }}" alt="president-fond.jpg"
                title="Фонд президентских грантов" class="img-responsive"></a>
    </div>

    <div class="text-center item_center">
        <h6>Решение трудовых споров</h6>
        <h4><a href='tel:{{ $contact->changeSecondPhoneForHref() }}' class="link_color">{{ $contact->phone2 }}</a></h4>
        <button class="btn btn-sm btn-primary btn_law_popup" data-toggle="modal" data-target="#lawyerQuestion"
            data-category="Решение трудовых споров">Спросить юриста
        </button>
    </div>

    <div class="text-center m30">
        <h6>Миграционные вопросы</h6>
        <h4><a href='tel:{{ $contact->changePhoneForHref() }}' class="link_color">{{ $contact->phone }}</a></h4>
        <button class="btn btn-sm btn-primary btn_law_popup" data-toggle="modal" data-target="#lawyerQuestion"
            data-category="Миграционные вопросы">Спросить юриста</button>
    </div>

    <div class="text-center m30">
        <h6>Помощь в сложных жизненных ситуациях</h6>
        <h4><a href='tel:{{ $contact->changePhoneForHref() }}' class="link_color">{{ $contact->phone }}</a></h4>
        <button class="btn btn-sm btn-primary btn_law_popup" data-toggle="modal" data-target="#lawyerQuestion"
            data-category="Помощь в трудных ситуациях">Спросить юриста</button>
    </div>
</div>

<script>
    $(".btn_law_popup").on("click", function(e) {
        let value = $(e.target).data("category");
        // console.log(value);
        $('#hidden_input').val(value);
    });

</script>
