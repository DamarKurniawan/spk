        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alternatif</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                            <a class="btn-primary btn-sm" href="<?php echo base_url('admin/add_alternatif/');?>">Tambah</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>alternatif</th>
                                        <th>gambar</th>
                                        <th>deskripsi</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach ($data as $alternatif){ 
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $alternatif['alternatif']; ?></td>
                                        <td align="center"><img width="50%" src="<?php echo base_url('assets/img/').$alternatif['gambar']; ?>"></td>
                                        <td class="center"><?php echo $alternatif['deskripsi']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/edit_alternatif/'.$alternatif['id']);?>" class="btn-primary btn-sm">Edit  </a>
                                            <a href="<?php echo base_url('admin/delete_alternatif/'.$alternatif['id']);?>" class="btn-danger btn-sm">delete  </a>
                                        </td>
                                    </tr>
                                    <?php }?>    
                                </tbody>
                                
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->