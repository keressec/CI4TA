<?= $this->extend('/layout/default') ?>

<?= $this->section('title') ?>
<title>Update Contact &mdash; tugasAkhir</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('contacts')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Ubah Data Kontak</h1>
        </div>

        <div class="section-body">
        
        <div class="card">
        <div class="card-header">
            <h4>Ubah Data Kontak</h4>
        </div>
        <div class="card-body col-md-10">
            <form action="<?=site_url('contacts/'.$contact->id_contact)?>" method="post" autocomplete="off">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PATCH">
            <div class="from-group">
                <label> Group *</label>
                <select name="id_group" class="form-control"required>
                    <option value="" hidden></option>
                        <?php foreach ($groups as $key => $value) :?>
                            <option value="<?=$value->id_group?>"<?=$contact->id_group == $value->id_group ? 'selected': null?>>
                            <?=$value->nama_group?>
                        </option>
                        <?php endforeach; ?>
                </select>
                </div>
                <div class="form-group">
                    <label>Nama Kontak *</label>
                    <input type="text" name="nama_contact" value="<?=$contact->nama_contact?>" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Nama Alias</label>
                    <input type="text" name="nama_alias" value="<?=$contact->nama_alias?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="tel" name="phone" value="<?=$contact->phone?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?=$contact->email?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="address" class="form-control"><?=$contact->address?>"</textarea>
                </div>
                <div class="form-group">
                    <label>Info Kontak</label>
                    <textarea name="info_contact" class="form-control"><?=$contact->info_contact?></textarea>
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