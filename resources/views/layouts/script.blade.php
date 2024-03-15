<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<!-- Bootstrap -->
<script src="{{  asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

<script>
  function onlyNumberKey(evt) {
       
      // Only ASCII character in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
      return true;
  }
</script>


<script>/*** add active class and stay opened when selected ***/
  var url = window.location;
  
  // for sidebar menu entirely but not cover treeview
  $('ul.nav-sidebar a').filter(function() {
      if (this.href) {
          return this.href == url || url.href.indexOf(this.href) == 0;
      }
  }).addClass('active');
  
  // for the treeview
  $('ul.nav-treeview a').filter(function() {
      if (this.href) {
          return this.href == url || url.href.indexOf(this.href) == 0;
      }
  }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
</script>