<?= $this->extend('/layout/default') ?>

<?= $this->section('title') ?>
<title>Data Group &mdash; tugasAkhir</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('groups')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Group Sampah</h1>
        </div> 

        <?php if(session()->getFlashdata('success')) :?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b> Success!</b>
                    <?=session()->getFlashdata('success')?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(session()->getFlashdata('error')) :?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b> Error!</b>
                    <?=session()->getFlashdata('error')?>
                </div>
            </div>
        <?php endif; ?>

        <div class="section-body">
        
        <div class="card">
        <div class="card-header">
            <h4>Data Group Kontak - Sampah</h4>
            <div class="card-header-action">
               <a href="<?=site_url('groups/restore')?>" class="btn btn-info">Pulihkan Semua Data</i></a> 
               <form action="<?=site_url('groups/delete2')?>" method="post" class="d-inline" onsubmit="return confirm('Hapus Data Permanen?')">
                    <?= csrf_field() ?>
                    <button class="btn btn-danger btn-sm">Hapus Semua Data Permanen</button>
                </form>
               <!-- <a href="<?=site_url('groups/delete2')?>" class="btn btn-danger">Hapus Semua Data Permanen</i></a>  -->
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-md">
            <tr>
                <th>#</th>
                <th>Nama Group</th>
                <th>Info</th>
                <th>Action</th>
            </tr>
            <?php foreach ($groups as $key => $value) :?>
                
                <tr>
                    <td><?=$key +1?></td>
                    <td><?=$value->nama_group?></td>
                    <td><?=$value->info_group?></td>
                    <td class="text-center" style="width:15%">
                        <a href="<?=site_url('groups/restore/'.$value->id_group)?>" class="btn btn-info btn-sm"> Restore</a>
                        <form action="<?=site_url('groups/delete2/'.$value->id_group)?>" method="post" class="d-inline" onsubmit="return confirm('Hapus Data Permanen?')">
                        <?= csrf_field() ?>
                        <button class="btn btn-danger btn-sm">Hapus Data Permanen</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        </div>
        </div>
</section>
<?= $this->endSection() ?>