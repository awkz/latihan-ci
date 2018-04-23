<div class="container-fluid">
          <!-- Title -->
          <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h5 class="txt-dark">Input Stok</h5>
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
            <div class="col-md-12">
              <div class="panel panel-default card-view">
                <div class="panel-heading">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark">Form Input Stok</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div class="panel-body">
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-wrap">
                          <form data-toggle="validator" role="form" id="forminputstok" action="<?= site_url('Stok/simpan') ?>" method="POST">
                            
                            <div class="form-group">
                              <label class="control-label mb-10">Tanggal</label>
                              <input type="date" class="form-control"  name="tanggal" id="tanggal" required>
                            </div>
                            <div class="form-group">
                              <label class="control-label mb-10">Barang</label>
                              <select class="form-control" name="kode" id="kode">
                                <?php foreach($barang as $r) { ?> 
                                <option value="<?= $r['kode'] ?>"><?= $r['nama'] ?></option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="control-label mb-10">Jumlah Barang</label>
                              <input type="number" class="form-control"  name="jumlah" id="jumlah" placeholder="15" required>
                            </div>
                            
                            <div class="form-group mb-0">
                              <button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Row -->
        </div>