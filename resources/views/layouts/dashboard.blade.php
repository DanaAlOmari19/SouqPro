{{-- head --}}
@include('layouts.patials.head')

{{-- nav --}}
@include('layouts.patials.nav')

{{-- aside --}}
@include('layouts.patials.aside')



      <main class="app-main">
        {{-- content --}}


        @yield('content')


        </main>
      <!--end::App Main-->
      <!--begin::Footer-->

      {{-- footer --}}
@include('layouts.patials.footer')

