<!DOCTYPE html>
<html lang="en">
<head>
 @include('admin.layout.head')
</head class="hold-transition skin-blue sidebar-mini">
<body>
    <div class="wrapper">
    @include('admin.layout.header')
    @include('admin.layout.sidebar')

    @section('main-content')
    @show

    @include('admin.layout.footer')
    </div>
    
</body>
</html>