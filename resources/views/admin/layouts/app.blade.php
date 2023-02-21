<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/admin/assets/imgs/theme/favicon.svg">
    <link href="/admin/assets/css/style.css?v=1.0.0" rel="stylesheet">
    <title>Ecom - Marketplace Dashboard Template</title>
    @livewireStyles
</head>
<body>
<div class="screen-overlay"></div>

<livewire:admin.layouts.side-bar/>
<main class="main-wrap">
    <livewire:admin.layouts.header/>

    @yield('content')

    <livewire:admin.layouts.footer/>

</main>
@livewireScripts
<script src="/admin/assets/js/vendors/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="/admin/assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="/admin/assets/js/vendors/select2.min.js"></script>
<script src="/admin/assets/js/vendors/perfect-scrollbar.js"></script>
<script src="/admin/assets/js/vendors/jquery.fullscreen.min.js"></script>
<script src="/admin/assets/js/vendors/chart.js"></script>
<script src="/admin/assets/js/main.js?v=1.0.0"></script>
<script src="/admin/assets/js/custom-chart.js" type="text/javascript"></script>
<script>
    window.addEventListener('swal:confirm', event => {
        swal({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.livewire.emit('delete', event.detail.id);
                }
            });
    });
</script>
<script>
    window.addEventListener('toastr:info', event => {
        toastr.info(event.detail.message);
    });
</script>

</body>
</html>
