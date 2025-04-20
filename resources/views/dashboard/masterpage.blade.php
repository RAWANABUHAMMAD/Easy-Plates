@include('dashboard.include.top')

@include('dashboard.include.sidebar')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

  @include('dashboard.include.navbar')

 <div class="container-fluid py-2">
  @yield('content')
  @include('dashboard.include.footer')
 </div>
 
</main>
@include('dashboard.include.setting')

@include('dashboard.include.bottom')




