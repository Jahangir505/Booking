$(document).ready(function() {

    $("#country").on("change", function(){
        const country = $(this).val();
        const url = $("#city_url").val();
        const rate_zone = $("#rate_zone");

        $.ajax({
            url: url,
            method: 'GET',
            data: {
                country: country
            },
            success: function(resp) {
                if(resp.length > 0) {
                    rate_zone.empty();
                    for(let city of resp) {
                        $(`<option value="${city}">`).text(city).appendTo(rate_zone);
                    }
                } else {
                    rate_zone.empty();
                    $(`<option value="">`).text('no city found for this city').appendTo(rate_zone);
                }
            },
            error: function(resp) {
                 console.log(resp);
            }
        })
    });
});