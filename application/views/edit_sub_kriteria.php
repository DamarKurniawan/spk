        <div id="page-wrapper">
            <?php echo form_open('admin/update_sub_kriteria'); ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Sub Kriteria</h1>
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
                                            <input type="hidden" name="subkrit_id" value="<?php echo $id ?>">
                                            <label>Kriteria</label>
                                            <select name="subkrit_kriteria" class="form-control" none>
                                                <?php foreach($data as $subkrit){?>
                                                <option value="<?php echo $subkrit['id']?>" <?php if($subkrit['id'] == $id_kriteria) echo 'selected="selected"' ?> ><?php echo $subkrit['kriteria']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Kriteria</label>
                                            <input class="form-control" name="subkrit_subKriteria" placeholder="sub kriteria" value="<?php echo $sub_kriteria ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>nilai</label>
                                            <input type="number" max="100" min="0" name="subkrit_nilai" value="<?php echo $nilai ?>">
                                        </div>
                                        <button type="submit" class="btn btn-default">Save</button>
                                        <button type="submit" formaction="<?php echo base_url('admin/sub_kriteria'); ?>" class="btn btn-default">back</button>
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