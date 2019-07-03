

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row mt-5">
          	
            
          

             <div class="col-md-12 mb-3">
                   
              <div class="card">
                <div class="card-body">
                
                    <div id="Container">
                      
                    </div>
                    <?php 
                    foreach ($owner as $ow) {
                      $nama[] = $ow->nama;
                      $harga[] = (int) $ow->harga;
                    }
                    ?>

                   <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
                  <script src="<?= base_url(); ?>assets/Highcharts/code/highcharts.js"></script>
                    <script>
                      Highcharts.chart('Container', {
                        chart: {
                          type: 'column'
                        },
                        title: {
                          text: 'Laporan Transaksi Owner'
                        },
                        xAxis: {
                          categories: <?= json_encode($nama); ?>,
                          crosshair: true
                        },
                        yAxis: {
                          min: 0,
                          title: {
                            text: 'Rupiah (Rp)'
                          }
                        },
                        tooltip: {
                          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                          footerFormat: '</table>',
                          shared: true,
                          useHTML: true
                        },
                        plotOptions: {
                          column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                          }
                        },
                        series: [{
                          name: 'Uang',
                          data: <?= json_encode($harga); ?>

                        }]
                      });

                    </script>
                </div>
              </div>
            </div>
            

          

          
           </div>   

        
			        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
