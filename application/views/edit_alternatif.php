
        <div id="page-wrapper">
            <?php echo form_open_multipart('admin/update_alternatif'); ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Alternatif</h1>
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
                                                <input type="hidden" name="alt_id" value="<?php echo $id; ?>">
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Id" disabled value="<?php echo $id; ?>">
                                            </div>
                                        <div class="form-group">
                                            <label>Alternatif</label>
                                            <input name="alt_alternatif" class="form-control" placeholder="alternatif" value="<?php echo $alternatif; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <?php if(empty($gambar)){?>
                                                <p>Gambar tidak ditemukan</p>
                                            <?php }else{ ?>
                                                <img src="<?php echo base_url('assets/img/'.$gambar);?>" width="100%">
                                            <?php };?>
                                            <input name="alt_gambar_new" type="file">
                                            <input type="hidden" name="alt_gambar_old" value="<?php echo $gambar; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="alt_deskripsi" class="form-control" rows="3" ><?php echo $deskripsi ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="submit" formaction="<?php echo base_url('admin/alternatif'); ?>" class="btn btn-default">Kembali</button>
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