
        <div id="page-wrapper">
            <?php echo form_open('admin/do_add_kriteria'); ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Kriteria</h1>
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
                                            <label>Kriteria</label>
                                            <input class="form-control" name="krit_kriteria" placeholder="kriteria">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipe</label>
                                            <select name="krit_tipe" class="form-control" none>
                                                <option disabled selected value hidden> pilih tipe</option>
                                                <option value="keuntungan">keuntungan</option>
                                                <option value="biaya">biaya</option>
                                            </select>
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