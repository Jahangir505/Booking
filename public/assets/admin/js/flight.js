$(document).ready(function(){

    const url = $("#flight_price_url").val();
    let stopOverIndex = 1;

    $("#routeId").change(function(){
        const routeId = $(this).val();
        const flightPrice = $("#flightPriceHolder");

        $.ajax({
            method: 'GET',
            url: url,
            data: {
                route_id: routeId
            },
            success: function(resp) {
                if (resp.length > 0) {
                    //clear old data
                    flightPrice.empty();
                    $("<option value=''>").text('Please Select A price for This Flight').appendTo(flightPrice);
                    //creating new selectable using flight prices data related to route
                    $.each(resp, function(index, data){
                        $(`<option value="${data.id}">`).text(data.flightPriceLabel).appendTo(flightPrice);
                    });
                } else {
                    flightPrice.empty();
                    $("<option value=''>").text("You Don't Have Any Flight Prices Created For This Route").appendTo(flightPrice);
                }
            },
            error: function(resp) {
                console.log(resp);
            }
        })
    });

    $("#transit").change(function(){
        const transit = $(this).val();
        
        if(transit == 'yes') {
            $("#stopover").show();
        } else {
            $("#stopover").hide();
        }
    });

    $("#addstops").click(function(e){
        e.preventDefault();

       $(`<div class="col-md-12 row">
            <div class="col-md-4 form-group">
                <input type="text" class="form-control" placeholder="StopOver Place E.g Airport Name" name="stopover[${stopOverIndex}][place]">
            </div>
            <div class="col-md-3 from-group">
                <input type="text" class="form-control form-datetime" readonly placeholder="Arival Time" name="stopover[${stopOverIndex}][arival_time]">
            </div>
            <div class="col-md-3 from-group">
                <input type="text" class="form-control form-datetime" readonly placeholder="Departure Time" name="stopover[${stopOverIndex}][departure_time]">
            </div>
            <div class="col-md-2 form-group">
                <button class="btn btn-danger removeStopOver">X</button>
            </div>
       </div>`).insertBefore($(this).parent());
        stopOverIndex++;
        applyPicker();
    });

    $(document).on("click", ".removeStopOver", function(e){
        e.preventDefault();
        $(this).parent().parent().remove();
    });

    

    function applyPicker() {
        $(".form-datetime").datetimepicker({
            format: 'yyyy-mm-dd hh:ii p',
            showMeridian: true,
            autoclose: true,
            startDate: new Date(),
        })
    }

    applyPicker();
});