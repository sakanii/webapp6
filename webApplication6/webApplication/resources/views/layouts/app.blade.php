<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
      <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>

 <script>
    $(function() {

        var app = {
            DOM: {},
            init: function () {

                // only applies to register form
                if (window.location.pathname == '/register') {

                    this.DOM.form = $('form');
                    this.DOM.form.name  = this.DOM.form.find('input[name="name"]');
                    this.DOM.form.email = this.DOM.form.find('input[name="email"]');
                    this.DOM.form.pwd   = this.DOM.form.find('input[name="password"]');
                    this.DOM.form.pwdc  = this.DOM.form.find('input[name="password_confirmation"]');

                    this.DOM.form.name.group = this.DOM.form.name.closest('.form-group');
                    this.DOM.form.email.group = this.DOM.form.email.closest('.form-group');
                    this.DOM.form.pwd.group = this.DOM.form.pwd.closest('.form-group');

                    this.DOM.form.submit( function(e) {
                        e.preventDefault();

                        var self = this; // native form object

                        error = {};

                        app.DOM.form.name.group.find('strong').text('');
                        app.DOM.form.email.group.find('strong').text('');
                        app.DOM.form.pwd.group.find('strong').text('');

                        app.DOM.form.name.group.removeClass('has-error');
                        app.DOM.form.email.group.removeClass('has-error');
                        app.DOM.form.pwd.group.removeClass('has-error');

                        var user = {};
                        user.name = app.DOM.form.name.val();
                        user.email = app.DOM.form.email.val();
                        user.password = app.DOM.form.pwd.val();
                        user.password_confirmation = app.DOM.form.pwdc.val();

                        var request = $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: '/validate/user',
                            type: 'POST',
                            contentType: 'application/json',
                            data: JSON.stringify(user)
                        });
                        request.done( function(data)
                        {
                            // native form submit
                            self.submit();
                        });
                        request.fail( function(jqXHR)
                        {
                            error = jqXHR.responseJSON;
                            if (error.name) {
                                app.DOM.form.name.group.find('strong').text(error.name[0]);
                                app.DOM.form.name.group.addClass('has-error');
                            }
                            if (error.email) {
                                app.DOM.form.email.group.find('strong').text(error.email[0]);
                                app.DOM.form.email.group.addClass('has-error');
                            }
                            if (error.password) {
                                app.DOM.form.pwd.group.find('strong').text(error.password[0]);
                                app.DOM.form.pwd.group.addClass('has-error');
                            }

                        });

                    });
                }
            }
        }
        app.init();
    });
    </script>
</body>
</html>
