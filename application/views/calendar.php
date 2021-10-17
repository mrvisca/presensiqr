<!DOCTYPE html>
<html>
    <head>
    <title>Full Calendar CRUD</title>
        <meta charset='utf-8' />
        <!--<link href="<?php echo base_url();?>public/css/bootstrap.min.css" rel="stylesheet">-->
        <link href='<?php echo base_url();?>public/css/fullcalendar.css' rel='stylesheet' />
        <link href="<?php echo base_url();?>public/css/bootstrapValidator.min.css" rel="stylesheet" />        
        <link href="<?php echo base_url();?>public/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
        <!-- Custom css  -->
        <!--<link href="<?php echo base_url();?>public/css/custom.css" rel="stylesheet" />-->

        <script src='<?php echo base_url();?>public/js/moment.min.js'></script>
        <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>public/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url();?>public/js/fullcalendar.min.js"></script>
        <script src='<?php echo base_url();?>public/js/bootstrap-colorpicker.min.js'></script>
        
        <script src='<?php echo base_url();?>public/js/main.js'></script>
        
    </head>
    <body>
        <!-- Main content -->
        <style media="screen">
            .col-md-12 {
                position: relative;
                min-height: 1px;
                padding-right: 30px;
                padding-left: 30px;
                padding-top: 5px;
            }
            .event-tooltip {
                width:150px;
                background: rgba(0, 0, 0, 0.85);
                color:#FFF;
                padding:10px;
                position:absolute;
                z-index:10001;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 11px;
            }
            .fc-unthemed .fc-today {
                background: #605ca8;
            }
            .fc td.fc-today {
                border-style: double; /* overcome neighboring borders */
            }
            .modal-header
            {
                background-color: #3A87AD;
                color: #fff;
            }
            #calendar {
                max-width: 1100px;
                margin: 0 auto;
            }
        </style>
        <div class="content">
            <!-- Notification -->
            <div class='col-xs-13'>
                <div class='box box-primary'>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                            <div class="error"></div>
                            <form class="form-horizontal" id="crud-form">
                            <input type="hidden" id="start">
                            <input type="hidden" id="end">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="title">Judul</label>
                                    <div class="col-md-4">
                                        <select class="form-control" id="title" name="title">
                                        <option  value="">---Pilih Karyawan---</option>                    
                                            <?php foreach($get_karyawan as $row) { ?>
                                                <option value="<?php echo $row->nama_karyawan;?>"><?php echo $row->nama_karyawan;?></option>
                                            <?php } ?>
                                        </select>    
                                    </div>
                                </div>                            
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="description">Deskripsi</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" id="description" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="color">Warna</label>
                                    <div class="col-md-4">
                                        <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                                        <span class="help-block">Klik untuk memilih warna</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



