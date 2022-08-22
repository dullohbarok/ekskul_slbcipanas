<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Ekstrakurikuler</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Ekstrakurikuler</li>
        </ol>
    </nav>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tableekstrakurikuler">
                            <thead>
                                <tr class="table-success">
                                    <th>ID</th>
                                    <th>Jenis Ekstrakurikuler</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
                                    <th>Satuan Pendidikan</th>
                                    <th>Agama</th>
                                    <th>No. HP</th>
                                    <th>Email</th>
                                    <th>Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_ekstrakurikuler as $row) : ?>
                                    <tr>
                                        <td><?= $row->Id ?></td>
                                        <td><?= $row->JenisEkstrakurikuler ?></td>
                                        <td><?= $row->Nama ?></td>
                                        <td><?= $row->JenisKelamin ?></td>
                                        <td><?= $row->Alamat ?></td>
                                        <td><?= $row->Kelas ?></td>
                                        <td><?= $row->SatuanPendidikan ?></td>
                                        <td><?= $row->Agama ?></td>
                                        <td><?= $row->NoHp ?></td>
                                        <td><?= $row->Email ?></td>
                                        <td>
                                            <a href="<?= site_url('edit/index/' . $row->Id) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
                                            <a href="javascript:void(0);" data="<?= $row->Id ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#tableekstrakurikuler').DataTable();
    $('#tableekstrakurikuler').on('click', '.item-delete', function() {
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>ekstrakurikuler/delete/',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>
