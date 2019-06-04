
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
                    <button class="btn btn-primary btn-block waves-effect">Upload Files</button>
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
            <div class="col-lg-12">
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Jan 11, 2014</small>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/1">
                            </div>
                            <div class="file-name">
                                Italy street.jpg
                                <br>
                                <small>Added: Jan 6, 2014</small>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/2">
                            </div>
                            <div class="file-name">
                                My feel.png
                                <br>
                                <small>Added: Jan 7, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-music"></i>
                            </div>
                            <div class="file-name">
                                Michal Jackson.mp3
                                <br>
                                <small>Added: Jan 22, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/3">
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Fab 11, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="img-responsive fa fa-film"></i>
                            </div>
                            <div class="file-name">
                                Monica's birthday.mpg4
                                <br>
                                <small>Added: Fab 18, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <a href="#">
                        <div class="file">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="file-name">
                                Annual report 2014.xls
                                <br>
                                <small>Added: Fab 22, 2014</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Jan 11, 2014</small>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/4">
                            </div>
                            <div class="file-name">
                                Italy street.jpg
                                <br>
                                <small>Added: Jan 6, 2014</small>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/5">
                            </div>
                            <div class="file-name">
                                My feel.png
                                <br>
                                <small>Added: Jan 7, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-music"></i>
                            </div>
                            <div class="file-name">
                                Michal Jackson.mp3
                                <br>
                                <small>Added: Jan 22, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/6">
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Fab 11, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="img-responsive fa fa-film"></i>
                            </div>
                            <div class="file-name">
                                Monica's birthday.mpg4
                                <br>
                                <small>Added: Fab 18, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <a href="#">
                        <div class="file">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="file-name">
                                Annual report 2014.xls
                                <br>
                                <small>Added: Fab 22, 2014</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Jan 11, 2014</small>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/1">
                            </div>
                            <div class="file-name">
                                Italy street.jpg
                                <br>
                                <small>Added: Jan 6, 2014</small>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/2">
                            </div>
                            <div class="file-name">
                                My feel.png
                                <br>
                                <small>Added: Jan 7, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-music"></i>
                            </div>
                            <div class="file-name">
                                Michal Jackson.mp3
                                <br>
                                <small>Added: Jan 22, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/3">
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Fab 11, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="img-responsive fa fa-film"></i>
                            </div>
                            <div class="file-name">
                                Monica's birthday.mpg4
                                <br>
                                <small>Added: Fab 18, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <a href="#">
                        <div class="file">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="file-name">
                                Annual report 2014.xls
                                <br>
                                <small>Added: Fab 22, 2014</small>
                            </div>
                        </div>
                    </a>
                </div>

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
                            <button type="button" onclick='addFolder();'class="btn btn-link waves-effect">Create</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">close</button>
                        </div>
</form>
                    </div>
                </div>
            </div>
    
