    <!-- plugins:js -->
    <script src="{{ asset('assets/admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/js/misc.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/js/settings.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/admin/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->

    <!-- Modal Detail -->
    <script type="text/javascript">
        $('.show').click(function () {
            $('#exampleModal').modal();
            var nama = $(this).attr('nama')
            var email = $(this).attr('email')
            var subject = $(this).attr('subject')
            var message = $(this).attr('message')
            $('#nama').val(nama)
            $('#email').val(email)
            $('#subject').val(subject)
            $('#message').val(message)
        })
    </script>

      <!-- Modal Detail -->
      <script type="text/javascript">
        $('.show2').click(function () {
            $('#modal').modal();

            var title = $(this).attr('title')
            var description1 = $(this).attr('description1')
            var description2 = $(this).attr('description2')
            $('#title').val(title)
            $('#description1').val(description1)
            $('#description2').val(description2)
        })
    </script>

    <script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("myInput")
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function myFunction2() {
        var x = document.getElementById("myInput2")
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>