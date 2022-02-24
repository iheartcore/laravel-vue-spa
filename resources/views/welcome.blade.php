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
                                <li><router-link to="/about">Logo Symbol</router-link></li>
                                <li><router-link to="/">Colors</router-link></li>
                                <li><router-link to="/">Typography</router-link></li>
                            </ul>
                        </section>

                        <section>
                            <h5>Doodles</h5>
                            <ul>
                                <li><router-link to="/">Mascot</router-link></li>
                                <li><router-link to="/about">Illustrations</router-link></li>
                                <li><router-link to="/">Loaders & Animations</router-link></li>
                                <li><router-link to="/">Wallpapers</router-link></li>
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
