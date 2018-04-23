<div class="container-fluid">
        
        <!-- Title -->
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Barang</h5>
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
                    <h6 class="panel-title txt-dark">Data Barang</h6>
                  </div>
                  <div class="pull-right">
                     <a href="<?= site_url('Barang/form'); ?>" class="btn btn-default btn-icon left-icon"><i class="fa fa-pencil"></i> Input Barang</a>
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
                            <th>Kode</th>
                            <th>Nama Barang</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data as $r) { ?> 
                          <tr>
                            <td><?= $r['kode'] ?></td>
                            <td><?= $r['nama'] ?></td>
                            <td><?= anchor('Barang/edit/'.$r['kode'], 'Edit',array('class' => 'btn btn-warning btn-outline')) ?> <?= anchor('Barang/delete/'.$r['kode'], 'Hapus',array('class' => 'btn btn-danger btn-outline')) ?></td>
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