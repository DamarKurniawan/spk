
        <div id="page-wrapper">
            <?php echo form_open_multipart('admin/do_add_alternatif'); ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Alternatif</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                                <label for="disabledSelect">Id</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Id" disabled>
                                            </div>
                                        <div class="form-group">
                                            <label>Alternatif</label>
                                            <input name="alt_alternatif" class="form-control" placeholder="alternatif">
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input name="alt_gambar" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="alt_deskripsi" class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->