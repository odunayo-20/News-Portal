
<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('vendors/js/vendor.bundle.addons.js') }}"></script>

    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/misc.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->

  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/misc.js') }}"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/formpickers.js') }}"></script>
  <script src="{{ asset('js/form-addons.js') }}"></script>
  <script src="{{ asset('js/x-editable.js') }}"></script>
  <script src="{{ asset('js/dropify.js') }}"></script>
  <script src="{{ asset('js/dropzone.js') }}"></script>
  <script src="{{ asset('js/jquery-file-upload.js') }}"></script>
  <script src="{{ asset('js/formpickers.js') }}"></script>
  <script src="{{ asset('js/form-repeater.js') }}"></script>

      <script src="{{ asset('vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
           <script src="{{ asset('js/editorDemo.js') }}"></script>
  <!-- Custom js for this page-->
  <script src="{{ asset('js/data-table.js') }}"></script>

  <script>
    window.addEventListener('show-delete-modal', event => {
        $('#deleteModal').modal('show');
    });

    window.addEventListener('close-delete-modal', event => {
        $('#deleteModal').modal('hide');
    });

    window.addEventListener('closeModal', event => {
        $('#exampleModal-4').modal('hide');
    });

    window.addEventListener('createShowModal', event => {
        $('#exampleModal-3').modal('show');
    });
    window.addEventListener('editShowModal', event => {
        $('#exampleModal-4').modal('show');
    });
</script>
