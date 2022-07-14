<?= $this->extend('/layout/default') ?>

<?= $this->section('title') ?>
<title>Update Group &mdash; tugasAkhir</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('groups')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Ubah Data Group</h1>
        </div>

        <div class="section-body">
        
        <div class="card">
        <div class="card-header">
            <h4>Ubah Data Group Kontak</h4>
        </div>
        <div class="card-body col-md-10">
            <form action="<?=site_url('groups/update/'.$group->id_group)?>" method="post" autocomplete="off">
            <?= csrf_field() ?>
                <div class="form-group">
                    <label>Nama Group *</label>
                    <input type="text" name="nama_group" value="<?=$group->nama_group?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Info Group</label>
                    <textarea name="info_group" class="form-control"> <?=$group->info_group?></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"> Simpan</i></button>
                    <button type="reset" class="btn btn-secondary"><i class="fas fa-trash"></i> Reset</button>
                    </div>       

            </form>
        </div>
        </div>
        </div>
</section>
<?= $this->endSection() ?>