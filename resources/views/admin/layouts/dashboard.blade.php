<!DOCTYPE html>
<html lang="en">
@section('htmlheader')
    @include('admin.includes.htmlheader')

@show
<body class="fixed-left">
    <div id="wrapper">
        @include('admin.includes.header')
        @section('sidebar')
        @include('admin.includes.sidebar')
        @show
        <div class="content-page">
            @yield('content')
        </div>
        @include('admin.includes.footer')
    </div>
{{-- @section('scripts')
      @include('admin.includes.scripts')
@show --}}
</body>
</html>