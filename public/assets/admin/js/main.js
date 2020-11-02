$(document).ready(function(){

    var hotel_form = $("#create_hotel_form");
    var room_form = $("#create_room_form");

    hotel_form.validate({
        errorElement: "div",
        errorClass: "alert alert-danger",
        name: {
            required: true
        },
        location: {
            required: true
        },
        stars: {
            required: true
        },

        messages: {
            name: 'please fill hotel name field',
            location: 'hotel location is required',
            stars: 'hotel stars is required'
        }
    });

    room_form.validate({
        errorElement: "div",
        errorClass: "alert alert-danger",
        room_type: {
            required: true
        },

        total_room: {
            required: true
        },

        available_room: {
            required: true
        },

        status: {
            required: true
        },

        hotel_id: {
            required: true,
        },

        messages: {
            room_type: 'please select a room type',
            total_room: 'total room is required',
            available_room: 'please insert avaliable room',
            status: 'enable or disable room',
            hotel_id: 'please select a hotel'
        }
    });

    $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
    
        if(hotel_form.length > 0) {
            return hotel_form.valid();
        }

        if(room_form.length > 0) {
            return room_form.valid();
        }

        
     });

    $('#smartwizard').smartWizard({
        selected: 0,  // Initial selected step, 0 = first step 
        keyNavigation:true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
        autoAdjustHeight:true, // Automatically adjust content height
        cycleSteps: false, // Allows to cycle the navigation of steps
        backButtonSupport: true, // Enable the back button support
        useURLhash: true, // Enable selection of the step based on url hash
        lang: {  // Language variables
            next: 'Next', 
            previous: 'Previous'
        },
        toolbarSettings: {
            toolbarPosition: 'bottom', // none, top, bottom, both
            toolbarButtonPosition: 'right', // left, right
            showNextButton: true, // show/hide a Next button
            showPreviousButton: true, // show/hide a Previous button
            toolbarExtraButtons: [
    
            ]
        }, 
        anchorSettings: {
            anchorClickable: false, // Enable/Disable anchor navigation
            enableAllAnchors: false, // Activates all anchors clickable all times
            markDoneStep: true, // add done css
            enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        },            
        contentURL: null, // content url, Enables Ajax content loading. can set as data data-content-url on anchor
        disabledSteps: [],    // Array Steps disabled
        errorSteps: [],    // Highlight step with errors
        theme: 'default',
        transitionEffect: 'fade', // Effect on navigation, none/slide/fade
        transitionSpeed: '400',
    });
    
    
    let files = [];
    const dropbox = document.querySelector("#dropbox");

    $("#dropbox").click(function() {
        if($("#gallery-photo-add").length) {
            $('#gallery-photo-add').get(0).click();
        }
    });

    if (dropbox) {

        dropbox.ondragenter = function(e){
            e.stopPropagation();
            e.preventDefault();
        };
    
        dropbox.ondragover = function(e){
            e.stopPropagation();
            e.preventDefault();
        };
    
        dropbox.ondrop = function(e) {
            e.stopPropagation();
            e.preventDefault();
            const dt = e.dataTransfer;
            
            files = [...files, ...dt.files]
            console.log(files);
            handleFilesPreview();
        }    
    }
    
    $("#gallery-photo-add").on("change", function() {
        files = [...files, ...this.files];
        handleFilesPreview();

    });


    function handleFilesPreview() {
        $("div.gallery").empty();

        if (files) {
            var filesAmount = files.length;
            for (let i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    const img = $("<img>");
                    const div = $('<div class="prev">');
                    const btn = $(`<button class="removeBtn" type="button" data-index="${i}">`).text('x');
                    img.attr('src', event.target.result);
                    div.append(img);
                    div.append(btn);
                    div.appendTo('div.gallery');
                }
                reader.readAsDataURL(files[i]);
            }
        }
    }

    $(document).on("click", ".removeBtn", function(e){
        e.preventDefault();
        files.splice(+$(this).data('index'), 1);
        handleFilesPreview();
    });

    $(".form-horizontal1").on("submit", function(e){
        e.preventDefault();
        const url = $(this).attr("action");
        const formData = new FormData();
        const data = $(this).serializeArray();

        for(const item of data) {
             formData.append(item.name, item.value);
        }

        // appending all files
        for (let i = 0; i < files.length; i++) {
            formData.append('files[]', files[i], files[i].name);
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(resp) {
                window.location.href = resp.redirect;
            },
            error: function(resp) {
                console.log(resp);
            }
        });

    });

    $(document).on("click", ".removeFS", function(e){
        // this function will delete image from server 
        e.preventDefault();
        const url = $(this).data('url');
        const token = $(this).data('token');
        var parent = $(this).parent();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });

        $.ajax({
            type: 'DELETE',
            url: url,
            success: function(resp) {
                parent.remove();
            }
        })

    });
    
    $(".datepicker").datepicker({
        startDate: new Date()
    })
});
