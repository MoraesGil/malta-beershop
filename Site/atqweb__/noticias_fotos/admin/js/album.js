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
        
        $.post('noticias_fotos/admin/actions.php?action=updateFotoName',
        {
            nfto_caption:nfto_caption,
            nfto_id:nfto_id
        },
        function(data){
            notify('<h1>'+data+'</h1>');
            $('#'+nfto_id).attr('title',$('#'+nfto_id).val());
            $('#'+nfto_id).hideTip();
            $('#'+nfto_id).showTip();
            $('#'+nfto_id).refreshTip();
        })
    })
    
    $('.refresh').live('click',function(){
        
        var nfto_id  = "f_" + $(this).attr('id') ;
        var nfto_caption = $("#"+nfto_id).val();
        var nfto_info = $("#i"+nfto_id).val();

        $.post('noticias_fotos/admin/actions.php?action=updateFotoName',
        {
            nfto_caption:nfto_caption,
            nfto_info:nfto_info,
            nfto_id:nfto_id
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
        var nfto_id = $(this).attr('id');
        var not_id = $(this).attr('album');
        
        $.post('noticias_fotos/admin/actions.php?action=updateFotoCover',
        {
            not_id:not_id,
            nfto_id:nfto_id
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
            height: 160,
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
            var url = "noticias_fotos/admin/actions.php?action=updateVideoPos"
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
        var nfto_id = $(this).attr('id');
        
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
                        $.post('noticias_fotos/admin/actions.php?action=deleteFoto',
                        {
                            nfto_id:nfto_id
                        },
                        function(data){
                            $('#item_'+nfto_id).remove();
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
                                    height: 260,
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
            $.post('noticias_fotos/admin/actions.php?action=deleteFoto',
            {
                nfto_id:nfto_id
            },
            function(data){
                $('#item_'+nfto_id).remove();
                notify('<h1>'+data+'</h1>');
                $(this).dialog("close");
                $("#dialog").remove();                        
            })                
        }
    })    
})