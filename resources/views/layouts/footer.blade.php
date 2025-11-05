 <!-- jQuery -->
<script src="{{ asset('sbadmin2/startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Bundle (dengan Popper.js) -->
<script src="{{ asset('sbadmin2/startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin (optional, tapi harus setelah jQuery & Bootstrap) -->
<script src="{{ asset('sbadmin2/startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages -->
<script src="{{ asset('sbadmin2/startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('sbadmin2/startbootstrap-sb-admin-2-gh-pages/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('sbadmin2/startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('sbadmin2/startbootstrap-sb-admin-2-gh-pages/js/demo/datatables-demo.js')}}"></script>
<script src="{{ asset('sweetalert2/package/dist/sweetalert2.all.min.js')}}"></script>

 @session('success')
<script>
    Swal.fire({
  title: "Sukses",
  text: "{{ session('success')}}",
  icon: "success"
});
</script>
    @endsession

     @session('error')
<script>
    Swal.fire({
  title: "Gagal",
  text: "{{ session('error')}}",
  icon: "error"
});
</script>
    @endsession

</body>

</html>