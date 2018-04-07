        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sub Kriteria</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                            <a class="btn-primary btn-sm" href="<?php echo base_url('admin/add_sub_kriteria/');?>">Tambah</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>id_kriteria</th>
                                        <th>sub_kriteria</th>
                                        <th>nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row){ ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['id_kriteria']; ?></td>
                                        <td><?php echo $row['sub_kriteria']; ?></td>
                                        <td class="center"><?php echo $row['nilai']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/edit_sub_kriteria/'.$row['id']);?>" class="btn-primary btn-sm">Edit  </a>
                                            <a href="<?php echo base_url('admin/delete_sub_kriteria/'.$row['id']);?>" class="btn-danger btn-sm">delete  </a>
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