
$(document).on('submit','#state-form',function(e){
    e.preventDefault();

    let id= $("input[name='id']").val();     
    let update_state= $("select[name='update_state']").val();
    let content=$('.table-container').html();
    if(update_state>0){
        $.ajax({
            method:"POST",
            url: "updateState.php",
            data:{
                id:id,
                update_state: update_state
            },
            success: function(data){
            console.log('order state updated ajax!');
            $('.popUp').css('visibility', 'hidden');
            $(".table-container").load(" .table-container > *");
        }});
    }else{
        $('.popUp').css('visibility', 'hidden');
    }
});