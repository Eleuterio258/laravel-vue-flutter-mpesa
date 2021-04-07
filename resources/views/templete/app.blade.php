<!DOCTYPE html>
<html lang="en">

@include('templete/header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    @include('templete/sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                   @include('templete/topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
              @include('templete/footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
       @include('templete/button')

    <!-- Logout Modal-->

	       @include('templete/modal')
           @include('templete/script')

</body>

</html>
