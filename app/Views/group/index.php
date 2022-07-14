<?= $this->extend('/layout/default') ?>

<?= $this->section('title') ?>
<title>Data Group &mdash; tugasAkhir</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Group</h1>
        <div class="section-header-button">
            <a href="<?=site_url('groups/new')?>" class="btn btn-primary">Tambah Group Kontak</a>
        </div>
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
            <h4>Data Group Kontak</h4>
            <div class="card-header-action">
               <a href="<?=site_url('groups/sampah')?>" class="btn btn-danger"><i class="fa fa-trash"> Sampah</i></a> 
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-md">
            <tr>
                <th>No.</th>
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
                        <a href="<?=site_url('groups/edit/'.$value->id_group)?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"> Ubah Data</i></a>
                        <form action="<?=site_url('groups/delete/'.$value->id_group)?>" method="post" class="d-inline" onsubmit="return confirm('Hapus Data?')">
                        <?= csrf_field() ?>
                        <button class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"> Hapus Data</i>
                        </button>
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