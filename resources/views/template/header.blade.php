
    {{--<h1>Start laravel 5</h1>--}}

    {{--@if (Auth::guest())--}}

        {{--<section class="authorization-block">--}}

            {{--<form method="post" action="/login">--}}

                {{--<input name="email" type="text" placeholder="Введите email">--}}

                {{--<input name="password" type="password" placeholder="Введите пароль">--}}

                {{--<input type="submit" value="Войти">--}}

                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                {{--<a href="registration">Зарегистрироваться</a>--}}

            {{--</form>--}}

        {{--</section>--}}

    {{--@endif--}}

    <section style="clear :both"></section>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Laravel</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/main">Main</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li>

                                <form method="post" action="/login" class="navbar-form navbar-left form-inline">

                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>

                                    {{--<input name="email" type="text" placeholder="Введите email">--}}

                                    {{--<input name="password" type="password" placeholder="Введите пароль">--}}

                                    {{--<input type="submit" value="Войти">--}}
                                    <button type="submit" class="btn btn-default">Submit</button>

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <a href="registration">Зарегистрироваться</a>

                                </form>

                        </li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/auth/logout">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
