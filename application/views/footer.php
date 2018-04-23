      <!-- Footer -->
      <footer class="footer container-fluid pl-30 pr-30">
        <div class="row">
          <div class="col-sm-12">
            <p> &copy; awkz.</p>
          </div>
        </div>
      </footer>
      <!-- /Footer -->

    </div>
    <!-- /Main Content -->

  </div>
  <!-- /#wrapper -->

  <!-- JavaScript -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>static/vendors/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?= base_url() ?>static/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Data table JavaScript -->
  <script src="<?= base_url() ?>static/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>static/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>static/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?= base_url() ?>static/vendors/bower_components/jszip/dist/jszip.min.js"></script>
  <script src="<?= base_url() ?>static/vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>static/vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>
  
  <script src="<?= base_url() ?>static/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>static/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>static/dist/js/export-table-data.js"></script>

  <!-- Slimscroll JavaScript -->
  <script src="<?= base_url() ?>static/dist/js/jquery.slimscroll.js"></script>

  <!-- simpleWeather JavaScript -->
  <script src="<?= base_url() ?>static/vendors/bower_components/moment/min/moment.min.js"></script>
  <script src="<?= base_url() ?>static/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
  <script src="<?= base_url() ?>static/dist/js/simpleweather-data.js"></script>


    <script src="<?= base_url() ?>static/vendors/bower_components/bootstrap-validator/dist/validator.min.js"></script>

  <!-- Progressbar Animation JavaScript -->
  <script src="<?= base_url() ?>static/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>static/vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

  <!-- Fancy Dropdown JS -->
  <script src="<?= base_url() ?>static/dist/js/dropdown-bootstrap-extended.js"></script>

  

  <!-- Owl JavaScript -->
  <script src="<?= base_url() ?>static/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

  <!-- ChartJS JavaScript -->
  <script src="<?= base_url() ?>static/vendors/chart.js/Chart.min.js"></script>

  <script src="<?= base_url() ?>static/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="<?= base_url() ?>static/vendors/bower_components/raphael/raphael.min.js"></script>
  <script src="<?= base_url() ?>static/vendors/bower_components/morris.js/morris.min.js"></script>
  <script src="<?= base_url() ?>static/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

  <!-- Switchery JavaScript -->
  <script src="<?= base_url() ?>static/vendors/bower_components/switchery/dist/switchery.min.js"></script>

  <!-- Init JavaScript -->
  <script src="<?= base_url() ?>static/dist/js/init.js"></script>
  <script src="<?= base_url() ?>static/dist/js/dashboard-data.js"></script>
  <script type="text/javascript">
    $("#forminputbarang").submit(function(event){
      event.preventDefault(); //prevent default action 
      var post_url = $(this).attr("action"); //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method
      //var form_data = $(this).serialize(); //Encode form elements for submission
      var kode = $("#kode").val();
      var nama = $("#nama").val();
     
      var redirect="<?= site_url('Barang'); ?>";
      var data ={
          'kode':kode,
          'nama':nama
        };
      console.log(data);
      $.ajax({
        url : post_url,
        type: request_method,
        data : data
      }).done(function(response){ //
        console.log("Sukses");
        swal({   
          title: "Sukses Input Data!",   
          type: "success", 
          text: "",
          confirmButtonColor: "#2ecd99",   
        }, function() {
          window.location= redirect;
        });
        
        return false;
      }).fail(function(msg) {
        swal({   
          title: "Error!",   
          type: "error",
          text: "Data sudah ada!",
          confirmButtonColor: "#2ecd99",   
        });
        return false;
      });
    });
    $("#formeditbarang").submit(function(event){
      event.preventDefault(); //prevent default action 
      var post_url = $(this).attr("action"); //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method
      //var form_data = $(this).serialize(); //Encode form elements for submission
      var kode = $("#kode").val();
      var nama = $("#nama").val();
      var redirect="<?= site_url('Barang'); ?>";
      var data ={
          'kode':kode,
          'nama':nama          
        };
      console.log(data);
      $.ajax({
        url : post_url,
        type: request_method,
        data : data
      }).done(function(response){ //
        console.log("Sukses");
        swal({   
          title: "Sukses Edit Data!",   
          type: "success", 
          text: "",
          confirmButtonColor: "#2ecd99",   
        }, function() {
          window.location= redirect;
        });
        
        return false;
      }).fail(function(msg) {
        swal({   
          title: "Error!",   
          type: "error",
          text: "Gagal Edit Data!",
          confirmButtonColor: "#2ecd99",   
        });
        return false;
      });
    });


    $("#forminputstok").submit(function(event){
      event.preventDefault(); //prevent default action 
      var post_url = $(this).attr("action"); //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method
      //var form_data = $(this).serialize(); //Encode form elements for submission
      var tanggal = $("#tanggal").val();
      var kode = $("#kode").val();
      var jumlah = $("#jumlah").val();     
      var redirect="<?= site_url('Stok'); ?>";
      var data ={
          'tanggal':tanggal,
          'kode':kode,
          'jumlah':jumlah
        };
      console.log(data);
      $.ajax({
        url : post_url,
        type: request_method,
        data : data
      }).done(function(response){ //
        console.log("Sukses");
        swal({   
          title: "Sukses Input Data!",   
          type: "success", 
          text: "",
          confirmButtonColor: "#2ecd99",   
        }, function() {
          window.location= redirect;
        });
        
        return false;
      }).fail(function(msg) {
        swal({   
          title: "Error!",   
          type: "error",
          text: "Data sudah ada!",
          confirmButtonColor: "#2ecd99",   
        });
        return false;
      });
    });
    $("#formeditstok").submit(function(event){
      event.preventDefault(); //prevent default action 
      var post_url = $(this).attr("action"); //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method
      //var form_data = $(this).serialize(); //Encode form elements for submission
      var tanggal = $("#tanggal").val();
      var kode = $("#kode").val();
      var jumlah = $("#jumlah").val();
      var redirect="<?= site_url('Stok'); ?>";
      var data ={
          'tanggal':tanggal,
          'kode':kode,
          'jumlah':jumlah          
        };
      console.log(data);
      $.ajax({
        url : post_url,
        type: request_method,
        data : data
      }).done(function(response){ //
        console.log("Sukses");
        swal({   
          title: "Sukses Edit Data!",   
          type: "success", 
          text: "",
          confirmButtonColor: "#2ecd99",   
        }, function() {
          window.location= redirect;
        });
        
        return false;
      }).fail(function(msg) {
        swal({   
          title: "Error!",   
          type: "error",
          text: "Gagal Edit Data!",
          confirmButtonColor: "#2ecd99",   
        });
        return false;
      });
    });
    
  </script>
</body>

</html>
