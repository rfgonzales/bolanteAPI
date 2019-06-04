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
    }
    );
    $('#DashboardMenu').addClass('active')
 }

function changeActiveFolder(){
    $('.list-group .list-group-item').click(function() {
        $(this).addClass('active-folder').siblings().removeClass('active-folder');
        
    });
    console.log('clicked a folder');
}
 function addFolder(){
     var foldername=document.getElementById('folderName').value;
     if(foldername!=''){
            
        $('.folder-list').prepend('<div class="list-group-item"> <a class="folder-item" href="#"  onclick="changeActiveFolder();"><i class="material-icons" >folder_open</i> <span style="Vertical-align:super">'+foldername+'</span> </a></div>');
        var foldername=document.getElementById('folderName').value="";
        $('#FolderNameModal').modal('hide');
     }else{
        alert('please put proper folder name');
     }
     
 }
 



 