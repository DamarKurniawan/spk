        <div id="page-wrapper">
            <?php echo form_open('admin/do_add_sub_kriteria'); ?>
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
                                            <label>Kriteria</label>
                                            <select name="subkrit_kriteria" class="form-control" none>
                                                <option disabled selected value hidden> pilih kriteria</option>
                                                <?php foreach($data as $subkrit){?>
                                                <option value="<?php echo $subkrit['id']?>"><?php echo $subkrit['kriteria']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Kriteria</label>
                                            <input class="form-control" name="subkrit_subKriteria" placeholder="sub kriteria">
                                        </div>
                                        <div class="form-group">
                                            <label>nilai</label>
                                            <input type="number" max="100" min="0" name="subkrit_nilai">
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