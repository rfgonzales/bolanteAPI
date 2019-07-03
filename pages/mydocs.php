
<?php session_start() ?>
<link href="css/mydocs/mydocs.css" rel="stylesheet">
<div class="row clearfix">
    <div class="col-md-4">
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                <div class='custom-file'>
                    <form >
                        <input type='file' multiple class='form-control-file' accept=".xls,.xlsx,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"/>
                    </form>
                </div>
                <div class="file-manager">
                    <div class="hr-line-dashed"></div>
                    <button class="btn btn-primary btn-block waves-effect" onclick='upload();'>Upload Files</button>
                    <div class="hr-line-dashed"></div>
                    <h5>Folders</h5>
                    <ul class="folder-list list-group" style="padding: 0" id='folders'>
                        <?php
                        include ('db_connect.php');

                        ?>
                        <div><button id='addFolder' data-target="#FolderNameModal" data-toggle='modal' type='button' class='btn btn-block waves-effect'><i class='material-icons' style='color:#1f91f3'>create_new_folder</i><span>Add New Folder</span></button> </div>
                    </ul>
                   
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 animated fadeInRight filepane">
        <div class="row">
            <div class="col-lg-12" id='filepanes'>
                

            
            </div>
        </div>
        </div>
    </div>
    <!-- modal for folder name-->
    <div class="modal fade" id="FolderNameModal" tabindex="-1" role="dialog" style="display: none;">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">Set The Folder Name</h4>
                        </div>
                        <div class="modal-body justify-content-center">
                            <form >
                            <input type='text' class='form-control' id='folderName'>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="addFolder(<?php echo $_SESSION['User_ID'] ?>);"  class="btn btn-link waves-effect">Create</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">close</button>
                        </div>
                        
</form>
                    </div>
                </div>
                <script>
                    LoadFolders(<?php echo $_SESSION['User_ID']; ?>);
                </script>
            </div>
    
    
