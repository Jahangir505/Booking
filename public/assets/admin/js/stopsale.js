$(document).ready(function(){
    const url = $("#data_url").val();

    $("#stopsale_type").change(function(e){
        const type = $(this).val();
        $("input[name='stop_sale_for']").val(type);

        $.ajax({
            url: url,
            method: 'get',
            data: {
                type: type,
            },

            success: function(resp) {
                const holder = $("#stopsaleable");
                const select = $("<select>").addClass('form-control').attr("name", "stopsaleable");
                const label = $("<lable>").text(`Stop Sale For ${type}`);
                holder.html("");

                if (resp.length > 0) {
                    holder.append(label);
                    $.each(resp, function(index, data){
                        console.log(data);
                        switch (type) {
                            case 'hotel':
                                $(`<option value="${data.id}">`).text(data.name).appendTo(select);
                                break;
                            case 'room':
                                $(`<option value="${data.id}">`).text(data.room_type+' room at hotel '+data.hotel.name).appendTo(select);
                                break;
                            case 'flight':
                                $(`<option value="${data.id}">`).text(data.depature_city+' to '+data.arival_city).appendTo(select);
                                break;
                        }
                        
                     });
                     holder.append(select);
                }
            },

            error: function(resp) {
                console.log(resp)
            }
        })
    })
});