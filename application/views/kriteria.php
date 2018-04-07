        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kriteria</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                            <a class="btn-primary btn-sm" href="<?php echo base_url('admin/add_kriteria/');?>">Tambah</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Kriteria</th>
                                        <th>Tipe</th>
                                        <th>opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $kriteria){ ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $kriteria['id']; ?></td>
                                        <td><?php echo $kriteria['kriteria']; ?></td>
                                        <td><?php echo $kriteria['tipe']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/edit_kriteria/'.$kriteria['id']);?>" class="btn-primary btn-sm">Edit  </a>
                                            <a href="<?php echo base_url('admin/delete_kriteria/'.$kriteria['id']);?>" class="btn-danger btn-sm">delete  </a>
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