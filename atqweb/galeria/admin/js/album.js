$(document).ready(function(){
    var confirmDelete = 0;
    $('#toUp').live('click',function(){
        $.scrollTo( $('#status-bar') , 1000);
    });
    $('#toDown').live('click',function(){
        $.scrollTo( $('#footer') , 1000);
    });
    $('#toBack').live('click',function(){
        window.location = $(this).attr('url');
    });   
    $('#toUpdate').live('click',function(){
        $('#f-update').submit()
    });  
    
    $('.updateAlbumName').live('click',function(){
        var album_id = $('.album_name').attr('id');
        var album_name = $.trim( $('.album_name').val() );
		var album_user = $.trim( $('.album_user').val() );
		var album_tipo = $.trim( $('.album_tipo').val() );
        $.post('galeria/admin/actions.php?action=updateAlbumName',
        {
            album_user:album_user,
			album_tipo:album_tipo,
			album_name:album_name,
            album_id:album_id
        },
        function(data){
            notify('<h1>'+data+'</h1>');
        })
        
        $('.refresh').click();
    })
    
    $('.foto_captions').live('change',function(){
        var foto_id = $(this).attr('id');
        var foto_caption = $(this).val();
        
        $.post('galeria/admin/actions.php?action=updateFotoName',
        {
            foto_caption:foto_caption,
            foto_id:foto_id
        },
        function(data){
            notify('<h1>'+data+'</h1>');
            $('#'+foto_id).attr('title',$('#'+foto_id).val());
            $('#'+foto_id).hideTip();
            $('#'+foto_id).showTip();
            $('#'+foto_id).refreshTip();
        })
    })
    
    $('.refresh').live('click',function(){
        
        var foto_id  = "f_" + $(this).attr('id') ;
        var foto_caption = $("#"+foto_id).val();
        var foto_info = $("#i"+foto_id).val();

        $.post('galeria/admin/actions.php?action=updateFotoName',
        {
            foto_caption:foto_caption,
            foto_info:foto_info,
            foto_id:foto_id
        },
        function(data){
            notify('<h1>'+data+'</h1>');
            //$('#'+foto_id).attr('title',$('#'+foto_id).val());
            //$('#'+foto_id).hideTip();
            //$('#'+foto_id).showTip();
            //$('#'+foto_id).refreshTip();
        })
        
    })
    
    $('.cover').live('click',function(){
        var foto_id = $(this).attr('id');
        var foto_album = $(this).attr('album');
        
        $.post('galeria/admin/actions.php?action=updateFotoCover',
        {
            foto_album:foto_album,
            foto_id:foto_id
        },
        function(data){
            notify('<h1>'+data+'</h1>');
        })
    })
    
    $('.deleteAlbum').live('click',function(){
        var id = $(this).attr('id');
        var msg  = '<ul class="dialog_delete">';
        msg += '<br><h1>VOCE ESTA PRESTES A REMOVER UM ALBUM E SUAS FOTOS!</h1>';
        msg += '<br><p>Deseja realmente prosseguir?</p>';
        msg += '</ul>'
        $('body').append('<div id="dialog"  class="dialogr" title="REMOVER ALBUM">'+msg+'</div>');
        $( "#dialog" ).dialog({
            modal: true,
            open: function(event, ui) { 
                $(this).parent().children().children('.ui-dialog-titlebar-close').hide();
            },	 	    
            width: 420,
            height: 360,
            buttons: {
                "Cancelar": function() {
                    $(this).dialog("close");
                    $("#dialog").remove();
                },
                "Prosseguir": function() {
                    window.location = 'album&delete='+id;
                }		
            }
        })
        return false;
    })
    
    
    /*Sorter Foto*/
    $( ".sortable" ).sortable({
        cursor: 'crosshair',
        helper: "clone",
        opacity: 0.6,
        update:function(event, ui){
            var order = $(this).sortable('serialize')
            var url = "galeria/admin/actions.php?action=updateVideoPos"
            $.post(url,{
                item: order
            },function(data){
                var arr = Array;
                arr = ["Muito bom!", "Demais!", "Ficou legal!", "Super!", "Agora esta bonito!","Contiue assim!"];
                msg  = arr[Math.floor(Math.random()*arr.length)];
                notify('<h1>POSICAO ATUALIZADA<br> '+msg+'</h1>');
            })
        }
    })
    $( ".drag" ).disableSelection();

$('.delete').live('click',function(){
        var foto_id = $(this).attr('id');
        
        if(confirmDelete  != 1)
        {
            var msg  = '<ul class="dialog_delete">';
            msg += '<br><h1>VOCE ESTA PRESTES A REMOVER UMA FOTO!</h1>';
            msg += '<br><p>Deseja realmente prosseguir?</p>';
            msg += '</ul>'
            $('body').append('<div id="dialog"  class="dialogr" title="Remover Foto">'+msg+'</div>');
            $( "#dialog" ).dialog({
                modal: true,
                open: function(event, ui) { 
                    $(this).parent().children().children('.ui-dialog-titlebar-close').hide();
                },	 	    
                width: 420,
                height: 360,
                buttons: {
                    "Cancelar": function() {
                        $(this).dialog("close");
                        $("#dialog").remove();
                    },
                    "Prosseguir": function() {
                        $.post('galeria/admin/actions.php?action=deleteFoto',
                        {
                            foto_id:foto_id
                        },
                        function(data){
                            $('#item_'+foto_id).remove();
                            notify('<h1>'+data+'</h1>');
                            $(this).dialog("close");
                            $("#dialog").remove();                        
                            if(confirmDelete == 0)
                            {
                                var msg  = '<ul class="dialog_delete">';
                                msg += '<br><p>DESEJA EXIBIR A CONFIRMACAO DE EXCLUSAO NA PROXIMA <br> FOTO QUE REMOVER DESTE ALBUM?</p>';
                                msg += '</ul>'
                                $('body').append('<div id="dialog"  class="dialogr" title="CONFIRMACAO DE EXCLUSAO">'+msg+'</div>');
                                $( "#dialog" ).dialog({
                                    modal: true,
                                    open: function(event, ui) { 
                                        $(this).parent().children().children('.ui-dialog-titlebar-close').hide();
                                    },	 	    
                                    width: 420,
                                    height: 360,
                                    buttons: {
                                        "NAO": function() {
                                            confirmDelete = 1;
                                            $(this).dialog("close");
                                            $("#dialog").remove();
                                        },
                                        "SIM": function() {
                                            confirmDelete = 2;
                                            $(this).dialog("close");
                                            $("#dialog").remove();
                                        }		
                                    }
                                }) 
                            }
    
                        })
                    }		
                }
            })
        }
        else
        {
            $.post('galeria/admin/actions.php?action=deleteFoto',
            {
                foto_id:foto_id
            },
            function(data){
                $('#item_'+foto_id).remove();
                notify('<h1>'+data+'</h1>');
                $(this).dialog("close");
                $("#dialog").remove();                        
            })                
        }
    })    
})