<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Ekstrakurikuler</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('ekstrakurikuler'); ?>">Data Ekskul</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    $attributes = array('id' => 'FrmEditJenisEkstrakurikuler', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="Id" name="Id" value=" <?= $data_ekstrakurikuler->Id; ?>">
                            <input type="text" class="form-control" id="Nama" name="Nama" value=" <?= $data_ekstrakurikuler->Nama; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Nama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="JenisEkstrakurikuler" class="col-sm-2 col-form-label">Jenis Ekstrakurikuler</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="JenisEkstrakurikuler" name="JenisEkstrakurikuler">
                                <option value="Handcraft" selected disabled>Pilih</option>
                                <option value="Handcraft" <?php if ($data_ekstrakurikuler->JenisEkstrakurikuler == "Handcraft") : echo "selected";
                                                        endif; ?>>Handcraft</option>
                                <option value="Pertanian" <?php if ($data_ekstrakurikuler->JenisEkstrakurikuler == "Pertanian") : echo "selected";
                                                        endif; ?>>Pertanian</option>
                                <option value="Komputer" <?php if ($data_ekstrakurikuler->JenisEkstrakurikuler == "Komputer") : echo "selected";
                                                        endif; ?>>Komputer</option>
                                <option value="Tata Boga" <?php if ($data_ekstrakurikuler->JenisEkstrakurikuler == "Tata Boga") : echo "selected";
                                                        endif; ?>>Tata Boga</option>
                                <option value="Melukis" <?php if ($data_ekstrakurikuler->JenisEkstrakurikuler == "Melukis") : echo "selected";
                                                        endif; ?>>Melukis</option>
                                <option value="Pertukangan" <?php if ($data_ekstrakurikuler->JenisEkstrakurikuler == "Pertukangan") : echo "selected";
                                                        endif; ?>>Pertukangan</option>
                                <option value="Musik" <?php if ($data_ekstrakurikuler->JenisEkstrakurikuler == "Musik") : echo "selected";
                                                        endif; ?>>Musik</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('JenisEkstrakurikuler') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JenisKelamin" name="JenisKelamin" value="Laki-laki" <?php if ($data_ekstrakurikuler->JenisKelamin == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="JenisKelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JenisKelamin2" name="JenisKelamin" value="Perempuan" <?php if ($data_ekstrakurikuler->JenisKelamin == "Perempuan") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="JenisKelamin2">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('JenisKelamin') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="Alamat" name="Alamat" rows="3"><?= $data_ekstrakurikuler->Alamat; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('Alamat') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Kelas" name="Kelas" value=" <?= $data_ekstrakurikuler->Kelas; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Kelas') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Satuan Pendidikan</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="SatuanPendidikan" name="SatuanPendidikan" value="SDLB" <?php if ($data_ekstrakurikuler->SatuanPendidikan == "SDLB") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="SatuanPendidikan">
                                    SDLB
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="SatuanPendidikan2" name="SatuanPendidikan" value="SMPLB" <?php if ($data_ekstrakurikuler->SatuanPendidikan == "SMPLB") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="SatuanPendidikan">
                                    SMPLB
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="SatuanPendidikan3" name="SatuanPendidikan" value="SMALB" <?php if ($data_ekstrakurikuler->SatuanPendidikan == "SMALB") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="SatuanPendidikan">
                                    SMALB
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="SatuanPendidikan4" name="SatuanPendidikan" value="Alumni" <?php if ($data_ekstrakurikuler->SatuanPendidikan == "Alumni") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="SatuanPendidikan">
                                    Alumni
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('SatuanPendidikan') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="Agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="Agama" name="Agama">
                                <option value="Islam" selected disabled>Pilih</option>
                                <option value="Islam" <?php if ($data_ekstrakurikuler->Agama == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if ($data_ekstrakurikuler->Agama == "Protestan") : echo "selected";
                                                        endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if ($data_ekstrakurikuler->Agama == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if ($data_ekstrakurikuler->Agama == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if ($data_ekstrakurikuler->Agama == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if ($data_ekstrakurikuler->Agama == "Khonghucu") : echo "selected";
                                                        endif; ?>>Khonghucu</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('Agama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NoHp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHp" name="NoHp" value="<?= $data_ekstrakurikuler->NoHp; ?>">
                            <small class="text-danger">
                                <?php echo form_error('NoHp') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Email" name="Email" value="<?= $data_ekstrakurikuler->Email; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Email') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
