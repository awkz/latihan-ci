<div class="container-fluid">
        
        <!-- Title -->
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Stok</h5>
          </div>
          <!-- Breadcrumb -->
          <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
             
            </ol>
          </div>
          <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
        
        <!-- Row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark">Data Stok Barang</h6>
                  </div>
                  <div class="pull-right">
                     <a href="<?= site_url('Stok/form'); ?>" class="btn btn-default btn-icon left-icon"><i class="fa fa-pencil"></i> Input Stok</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <div class="table-wrap">
                    <div class="table-responsive">
                      <table id="example" class="table table-hover display  pb-30" >
                         <thead>
                          <tr>
                            <th>Tanggal</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data as $r) { ?> 
                          <tr>
                            <td><?= $r['tanggal'] ?></td>
                            <td><?= $r['nama'] ?></td>
                            <td><?= $r['jumlah'] ?></td>
                            <td><?= anchor('Stok/edit/'.$r['tanggal'], 'Edit',array('class' => 'btn btn-warning btn-outline')) ?> <?= anchor('Stok/delete/'.$r['tanggal'], 'Hapus',array('class' => 'btn btn-danger btn-outline')) ?></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>
        <!-- /Row -->
      </div>