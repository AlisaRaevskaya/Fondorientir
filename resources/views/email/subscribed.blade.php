@component('mail::message')

    <h2>Добрый день!</h2>
    <p>Вам пришло сообщение из категории {{$category}}</p>


    @component('mail::button', ['url' => 'http://fondorientir.ru'])
        <p>Перейти на главную страницу!</p>
    @endcomponent

    С уважением,<br>
    {{ config('app.name') }}
@endcomponent
