@component('mail::message')

# Добрый день!
Благодарим Вас за подписку на наши новости!
Перейти на главную страницу!
@component('mail::button', ['url' => 'http://fondorientir.ru'])
Button Text
@endcomponent

С уважением,<br>
{{ config('app.name') }}
@endcomponent
