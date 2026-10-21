{{-- head --}}
@include('layouts.patials.head')

{{-- nav --}}
@include('layouts.patials.nav')

{{-- aside --}}
@include('layouts.patials.aside' ,['activeMenu' => 'dashboard']))



      <main class="app-main">
        {{-- content --}}
        <ul>
        @section('list' )
            <li> Home </li>
        @show

        </ul>

        @yield('content')


        </main>
      <!--end::App Main-->
      <!--begin::Footer-->

      {{-- footer --}}
@include('layouts.patials.footer')

