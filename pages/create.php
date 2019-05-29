
<div class="container-fluid">
            <div class="block-header">
 <center><h2>Write Document</h2></center>
            </div>

            <!-- CKEditor -->
            <form Method='GET'>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Document Writer
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a>Upload Scanned Document Instead </a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <textarea id="ckeditor" placeholder="Write your document here" name='text'>
                                
                            </textarea>
</br>
<p> Approved By: </p>
                            <button type="button" class="btn btn-default waves-effect" data-toggle="modal" data-target="#smallModal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->  
        
        </div>
    
  <!-- Jquery Core Js -->
  <script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Ckeditor -->
<script src="plugins/ckeditor/ckeditor.js"></script>


<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="js/pages/forms/editors.js"></script>

<!-- Demo Js -->
<script src="js/demo.js"></script>
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Set Document File Name</h4>
            </div>
            <div class="modal-body">
                <h5 class='card-inside-title'>Filename:</h5>
                <input type='text'>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                <button type="cancel" class="btn btn-link waves-effect" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
</form> 

 
