@component('mail::message')

    <h2>Добрый день!</h2>
    <p>Благодарим Вас за оставленное сообщение из категории {{ $category }}!Наши специалисты свяжутся с Вами
        в ближайщее время!</p>


    @component('mail::button', ['url' => 'http://fondorientir.ru'])
        <p>Перейти на главную страницу!</p>
    @endcomponent

    С уважением,<br>
    {{ config('app.name') }}
@endcomponent
