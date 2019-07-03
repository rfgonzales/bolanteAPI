
$(document).ready(function() 
 {  
    init();

    $('#DashboardMenu').click(function(e) 
    { 
        $.get('pages/dashboard.php', function(data) { 
                $('#MainContainer').html(data);
            }
        );
        $('#CreateMenu').removeClass('active')
        $('#DashboardMenu').addClass('active')
        
    });
    $('#CreateMenu').click(function(e){
        $.get('pages/create.php', function(data) { 
            $('#MainContainer').html(data);
        }
        );
        $('#CreateMenu').addClass('active')
        $('#DashboardMenu').removeClass('active')
    });
    $('#documentMenu').click(function(e){
        $.get('pages/mydocs.php', function(data) { 
            $('#MainContainer').html(data);
        }
        );
        $('#documentMenu').addClass('active')
        $('#CreateMenu').removeClass('active')
        $('#DashboardMenu').removeClass('active')
    });
      
 });


 function init(){
    $.get('pages/dashboard.php', function(data) { 
        $('#MainContainer').html(data);
    });
    $('#DashboardMenu').addClass('active')
 }

function changeActiveFolder(folderID){
    $('.list-group .list-group-item').click(function() {
        $(this).addClass('active-folder').siblings().removeClass('active-folder');   
    });
    loadFiles(folderID);

    console.log('clicked folder:'+folderID);
}

function addFolder(userid){
     var foldername=document.getElementById('folderName').value;
     if(foldername!=''){
        $.post( "API/Folder/create.php", {newFolderName:foldername})
        .done(function( data ) {
            console.log(data); 
            refreshFolders(userid);
            notify("Folder Created");
        })
        .fail(function(data){
            console.log(data);
            console.log('failed'); 
            alert('data-communication failed');
        });
        document.getElementById('folderName').value="";
        $('#FolderNameModal').modal('hide');
        
     }else{
        alert('please put proper folder name');
     }
     
 }
 function refreshFolders(userid){
     $('.list-group-item').remove();
     LoadFolders(userid);
 }
 function LoadFolders(userid){
     console.log('loading');
    $.post( "API/Folder/read.php", { user_id: userid})
    .done(function( data ) {
        for(var i=0;i<data.Folders.length;i++){
            var FoldrName=data.Folders[i].FolderName;
            var FolderID=data.Folders[i].FolderID;
            insertfolder(FoldrName,FolderID);
        }
    });
 }
 function insertfolder(foldername,FolderID){
    $('.folder-list').prepend('<div class="list-group-item" data-folderID="'+FolderID+'" id="'+FolderID+'"> <a class="folder-item" href="#"  onclick="changeActiveFolder('+FolderID+');"><i class="material-icons" >folder_open</i> <span style="Vertical-align:super">'+foldername+'</span> </a> <span class="pull-right"><a onclick="confirmDeleteFolder('+FolderID+');"><i class="material-icons">delete</i></a><a tooltip="rename"><i class="material-icons">edit</i></a></span></div>');
    console.log("folder:"+foldername+" added with id:"+FolderID);
    
 }
 function removeFolder(folderID){
     $('#'+folderID+'').remove();
 }
function upload(){
    var folder=$('.active-folder');
    alert(folder.attr('id'));
    

}
 function confirmDeleteFolder(FolderID){
    var resp=confirm("you sure you want to delete this folder? All of its contents will be deleted also");
    if(resp){
       $.post( "API/Folder/delete.php", { FolderID: FolderID})
       .done(function( data ){
           console.log(data);
           console.log('delete Folder with id:'+FolderID);
           removeFolder(FolderID);
           showNotification('bg-blue','Folder deleted','bottom','center','','');
       })
       .fail(function(data){
           console.log(data);
           console.log('failed'); 
           alert('data-communication failed');
       });    
    }
    else{
        console.log('Action to remove folder:'+FolderID+' was aborted');
    }  
}
function notify(Message){
    showNotification('bg-blue',Message,'bottom','center','','');
}
function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
    if (colorName === null || colorName === '') { colorName = 'bg-black'; }
    if (text === null || text === '') { text = 'Turning standard Bootstrap alerts'; }
    if (animateEnter === null || animateEnter === '') { animateEnter = 'animated fadeInDown'; }
    if (animateExit === null || animateExit === '') { animateExit = 'animated fadeOutUp'; }
    var allowDismiss = true;

    $.notify({
        message: text
    },
        {
            type: colorName,
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 1000,
            placement: {
                from: placementFrom,
                align: placementAlign
            },
            animate: {
                enter: animateEnter,
                exit: animateExit
            },
            template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
}
function loadFiles(FolderID){
    $('#filepanes').empty();
    $('#filepanes').append('<div class="file-box"><div class="file"><a href="#"><span class="corner"></span><div class="icon"><i class="img-responsive fa fa-film"></i></div><div class="file-name"> Monicas birthday.mpg4</br><small>Added: Fab 18, 2014</small></div></a></div></div> ');
}


//template for filebox

    



 