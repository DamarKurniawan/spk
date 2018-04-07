
        <div id="page-wrapper">
            <?php echo form_open('admin/update_kriteria'); ?>
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
                                            <input type="hidden" name="krit_id" value="<?php echo $id ?>">
                                            <input class="form-control" name="krit_kriteria" placeholder="kriteria" value="<?php echo $kriteria ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipe</label>
                                            <select name="krit_tipe" class="form-control" none>
                                                <option value="keuntungan" <?php if($tipe == 'keuntungan') echo 'selected="selected"';?>>keuntungan</option>
                                                <option value="biaya" <?php if($tipe == 'biaya') echo 'selected="selected"';?>>biaya</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">simpan</button>
                                        <button type="submit" formaction="<?php echo base_url('admin/kriteria'); ?>" class="btn btn-default">kembali</button>
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