$(document).ready(function() 
 {
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
 });

 