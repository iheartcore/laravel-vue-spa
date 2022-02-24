<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <div class="container">
                <header>
                    <img src="{{ asset('images/logo.svg') }}" alt="logo Laracasts" />
                </header>

                <main>
                    <aside>
                        <section>
                            <h5>The Brand</h5>
                            <ul>
                                <li><router-link to="/">Logo</router-link></li>
                                <li><router-link to="/logo-symbol">Logo Symbol</router-link></li>
                                <li><router-link to="/colors">Colors</router-link></li>
                                <li><router-link to="/typography">Typography</router-link></li>
                            </ul>
                        </section>

                        <section>
                            <h5>Doodles</h5>
                            <ul>
                                <li><router-link to="/mascot">Mascot</router-link></li>
                                <li><router-link to="/illustrations">Illustrations</router-link></li>
                                <li><router-link to="/loaders-animations">Loaders & Animations</router-link></li>
                                <li><router-link to="/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
