@include('layouts.admin.header')
@include('layouts.admin.sidebar')
<section id="main-content">
    <section class="wrapper">
        <div id="app">
            @yield('content')
        </div>
    </section>
</section>
@include('layouts.admin.footer')
