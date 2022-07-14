<?= $this->extend('/layout/default') ?>
<?= $this->section('title') ?>
<title>Home &mdash; tugasAkhir</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
        <div class="section-header">
        <h1>Dashboard</h1>
        </div>
        <div class="section-body">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-sm-8 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-calendar-check"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Acara</h4>
                  </div>
                  <div class="card-body">
                    <?=countData('acara')?>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="fas fa-address-card"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Grup Kontak</h4>
                  </div>
                  <div class="card-body">
                  <?=countData('groups')?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-address-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Kontak</h4>
                  </div>
                  <div class="card-body">
                  <?=countData('contacts')?>
                  </div>
                </div>
              </div>
            </div>
                             
          </div>
        </div>
</section>
<?= $this->endSection() ?>