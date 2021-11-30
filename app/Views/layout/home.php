<?= $this->extend('layout/main') ?>

<?= $this->section('isi') ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<div class="row justify-content-center mt-2">
    <div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            Fetch From API
        </div>
        <div class="card-body">
           <div class="form-group">
               <label for="">Pilih Provinsi</label>
               <select name="provinsi" id="provinsi" class="form-control form-control-sm">
               <option value="<?php echo "Jaw"; ?>"><?php echo "Jow"; ?></option>
                </select>
        </div>
        <div class="form-group">
               <label for="">Pilih Kabupaten/Kota</label>
               <select name="kota" id="kota" class="form-control form-control-sm">
                </select>
        </div>
        <div class="form-group">
               <label for="">Pilih Kecamatan</label>
               <select name="kecamatan" id="kecamatan" class="form-control form-control-sm">
                </select>
        </div>
        <div class="form-group">
               <label for="">Pilih Kelurahan</label>
               <select name="kelurahan" id="kelurahan" class="form-control form-control-sm">
                </select>
        </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>