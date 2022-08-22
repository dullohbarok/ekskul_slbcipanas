<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Ekstrakurikuler</a></li>
            <li class="breadcrumb-item "><a>Pendaftaran</a></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    $attributes = array('id' => 'FrmAddEkstrakurikuler', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama" name="Nama" value=" <?= set_value('Nama'); ?>">
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
                                <option value="Handicraft" <?php if (set_value('JenisEkstrakurikuler') == "Handicraft") : echo "selected";
                                                        endif; ?>>Handicraft</option>
                                <option value="Melukis" <?php if (set_value('JenisEkstrakurikuler') == "Melukis") : echo "selected";
                                                        endif; ?>>Melukis</option>
                                <option value="TataBoga" <?php if (set_value('JenisEkstrakurikuler') == "TataBoga") : echo "selected";
                                                        endif; ?>>Tata Boga</option>
                                <option value="Pertukangan" <?php if (set_value('JenisEkstrakurikuler') == "Pertukangan") : echo "selected";
                                                        endif; ?>>Pertukangan</option>
                                <option value="Pertanian" <?php if (set_value('JenisEkstrakurikuler') == "Pertanian") : echo "selected";
                                                        endif; ?>>Pertanian</option>
                                <option value="Komputer" <?php if (set_value('JenisEkstrakurikuler') == "Komputer") : echo "selected";
                                                        endif; ?>>Komputer</option>
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
                                    <input class="form-check-input" type="radio" id="JenisKelamin" name="JenisKelamin" value="Laki-laki" <?php if (set_value('JenisKelamin') == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="JenisKelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JenisKelamin2" name="JenisKelamin" value="Perempuan" <?php if (set_value('JenisKelamin') == "Perempuan") : echo "checked";
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
                            <textarea class="form-control" id="Alamat" name="Alamat" rows="3"><?= set_value('Alamat'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('Alamat') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Satuan Pendidikan</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="SatuanPendidikan" name="SatuanPendidikan" value="SDLB" <?php if (set_value('SatuanPendidikan') == "SDLB") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="SatuanPendidikan">
                                        SDLB
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="SatuanPendidikan2" name="SatuanPendidikan" value="SMPLB" <?php if (set_value('SatuanPendidikan') == "SMPLB") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="SatuanPendidikan2">
                                        SMPLB
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="SatuanPendidikan3" name="SatuanPendidikan" value="SMALB" <?php if (set_value('SatuanPendidikan') == "SMALB") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="SatuanPendidikan2">
                                        SMALB
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="SatuanPendidikan4" name="SatuanPendidikan" value="Alumni" <?php if (set_value('SatuanPendidikan') == "Alumni") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="SatuanPendidikan2">
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
                        <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Kelas" name="Kelas" value="<?= set_value('Kelas'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Kelas') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="Agama" name="Agama">
                                <option value="Islam" selected disabled>Pilih</option>
                                <option value="Islam" <?php if (set_value('Agama') == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if (set_value('Agama') == "Protestan") : echo "selected";
                                                            endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if (set_value('Agama') == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if (set_value('Agama') == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if (set_value('Agama') == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if (set_value('Agama') == "Khonghucu") : echo "selected";
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
                            <input type="text" class="form-control" id="NoHp" name="NoHp" value="<?= set_value('NoHp'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NoHp') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Email" name="Email" value="<?= set_value('Email'); ?>">
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
