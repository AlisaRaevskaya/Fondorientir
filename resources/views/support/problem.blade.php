@extends('layout')
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <div class="entity_wrapper">

                        <h5>Отправьте нам свое мнение по поводу работы нашего сайта и мы обязательно его рассмотрим.</h5>

                    @include('forms.problemForm')

                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <script>
        grecaptcha.ready(function(){

        grecaptcha.execute('6LedE94ZAAAAAOf6iuTtMNxzWxMKX18zub2NWPUg', {action:'/submit'}).then(function(token){



            });

            });
    </script>
@endsection
