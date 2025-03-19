<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ادمین رنجر </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
</head>
<body>
<div class="d-flex" id="wrapper">

    @include('admin.inc.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

        @include('admin.inc.navbar')

        <div class="container">
            {{ $slot }}
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<!-- Script -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    @foreach(["message", "success", "error", 'info', 'warning'] as $row)
         @if(Session::has($row))
              toastr.options = {
                  "progressBar": true
              };
              toastr["{{$row}}"]("{{ session($row) }}");
         @endif
    @endforeach
</script>
</body>
</html>
