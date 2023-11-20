<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                Tambah Data Karyawan Baru
            </div>
            <div class="card-body">

                <form action="<?= base_url('karyawan/create') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 p-4 border">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="id_karyawan" class="form-control-label">ID Karyawan</label>
                                        <input class="form-control" type="text" value="<?= set_value('id_karyawan') ?>"
                                            name="id_karyawan" id="id_karyawan" placeholder="010101">
                                        <?= form_error('id_karyawan', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nama" class="form-control-label">Nama Karyawan</label>
                                        <input class="form-control" type="text" value="<?= set_value('nama') ?>"
                                            name="nama" id="nama">
                                        <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="jk" class="form-control-label">Jenis Kelamin</label>
                                        <select class="form-control" name="jk" id="jk">
                                            <option value="" hidden>-- Pilih Jenis Kelamin --</option>
                                            <option value="L">Laki Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        <?= form_error('jk', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="tgl_lahir" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" value="<?= set_value('tgl_lahir') ?>"
                                            name="tgl_lahir" id="tgl_lahir">
                                        <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="alamat" class="form-control-label">Alamat</label>
                                        <input class="form-control" type="text" value="<?= set_value('alamat') ?>"
                                            name="alamat" id="alamat" placeholder="Desa .... Kec ... Kab ....">
                                        <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 border p-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="foto" class="form-control-label">Foto</label>
                                        <input class="form-control" type="file" name="foto" id="foto" />
                                        <?= form_error('foto', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="jabatan" class="form-control-label">Jabatan</label>
                                        <select class="form-control" name="jabatan" id="jabatan">
                                            <option value="" hidden>-- Pilih Jabatan --</option>
                                            <option value="1">STAFF</option>
                                            <option value="2">SUPERVISOR</option>
                                            <option value="3">ASSISTEN CHIEF</option>
                                        </select>
                                        <?= form_error('jabatan', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="departemen" class="form-control-label">Departemen</label>
                                        <select class="form-control" name="departemen" id="departemen">
                                            <option value="" hidden>-- Pilih Departemen --</option>
                                            <option value="1">IT</option>
                                        </select>
                                        <?= form_error('departemen', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="join_at" class="form-control-label">Gabung Sejak</label>
                                        <input class="form-control" type="date" value="<?= set_value('join_at') ?>"
                                            name="join_at" id="join_at" placeholder="010101">
                                        <?= form_error('join_at', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">SIMPAN DATA</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>