<html>
    <head>
        <title> Data Studi</title>
    </head>
    <body>
        <table border="2">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($prodi as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php echo anchor('home', 'kembali ke home') ?>
    </body>
</html>