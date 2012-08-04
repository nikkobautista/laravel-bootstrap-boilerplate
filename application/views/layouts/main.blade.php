<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ Config::get('project.title') }}</title>
        {{ Asset::styles() }}
        {{ Asset::scripts() }}
        <style>
        @section('css')
        @yield_section
        </style>
        
        <script>
        @section('js')
        @yield_section
        </script>
    </head>
 
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="/">{{ Config::get('project.title') }}</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            @section('navigation')
                            <li class="active"><a href="/">Home</a></li>
                            @yield_section
                        </ul>
                    </div><!--/.nav-collapse -->
                    @yield('post_navigation')
                </div>
            </div>
        </div>
 
        <div class="container">
            @include('plugins.status')
            @yield('content')
            <hr>
            <footer>
            <p>&copy; <span class="brand">{{ Config::get('project.title') }}</span> {{ date('Y'); }}</p>
            </footer>
        </div> <!-- /container -->

        <div class="modal hide" id="generic_loading_modal">
            <div class="modal-header">
                <h3 id="generic_loading_modal_title"></h3>
            </div>
            <div class="modal-body">
                <p id="generic_loading_modal_body"></p>
            </div>
        </div>
        @section('additional_modals')
        @yield_section
    </body>
</html>