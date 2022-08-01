<html>
    <head>
        <title> Data Mahasiswa</title>
    </head>
    <h3>Data MAhasiswa</h3>
    <?php echo anchor('mahasiswa/tambah_data', 'Tambah Data') ?>
    <body>
        <table border="2">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->NIM ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                    <td>
                        <?php echo anchor("mahasiswa/edit/{$row->id_mahasiswa}", "Edit") ?>
                        <?php echo anchor("mahasiswa/hapus/{$row->id_mahasiswa}", "Hapus") ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php
        $pesan = $this->session->flashdata('pesan');
        echo $pesan;
        ?> 
        <?php echo anchor('home', 'kembali ke home') ?>
    </body>
</html>