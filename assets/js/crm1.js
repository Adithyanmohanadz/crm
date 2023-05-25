$(document).ready(function(){

    var base_url = $('#base').val();




$('#other_src_btn').click(function(){

    var other_source = $('#other_source').val();

    if(other_source == ''){
        alert('Please enter any data')
    }else{
    $.ajax({
        url : base_url + "main/add_other_source",
        type: "post",
        data: {
            other_source:other_source
        },
        success: function(data){
            // console.log(data)
            // var question_order_view = document.getElementById("item");
            // question_order_view.innerHTML = data;
            $("#other_source_div").load(location.href+" #other_source_div>*","");
        }
    })
    }// else ending
})



/////////////customer form submission
$('#customer_form').submit(function(e) {

    e.preventDefault();

    var formData = $(this).serialize();
    $.ajax({
        url : base_url + "main/customer_registration",
        type: 'POST',
        data: formData,
        success: function(data) {
            var response = JSON.parse(data);
            if (response.success) {
                window.location.href =  base_url + "main/customer_item"
            
                // alert('Data saved successfully!');
                // $('#customer_form')[0].reset();
            } else {
                alert(response.errors);
            }
        },
        // error: function() {
        //     alert('Error occurred while saving data.');
       // }
    });
});


// to hide all product list
$('.all_item_class').hide();

$(document).on('change', '.item_check', function(){  
    var item_display_id = $(this).attr("id");   
    $('#divis'+item_display_id+'').toggle('slow')
});



$('#search_item').on('input', function() { // Bind an input event handler to the search input field
    var searchTerm = $(this).val(); // Get the search term from the input field

    $.ajax({
        url : base_url + "main/fetch_items",
        type: 'post',
        dataType: 'json',
        data: {searchTerm: searchTerm}, // Pass the search term as POST data
        success: function(response) {
            var html = '';
            if (response.length > 0) {
                $.each(response, function(index, product) {
                    // Display the search results in HTML
                    html += '<div><strong>Name:</strong> ' + product.item_name + ', <strong>Price:</strong> ' + product.code + '</div>';
                });
            } else {
                html = 'No results found.';
            }
            $('#searchResults').html(html); // Update the search results div with the HTML
        }
    });
});




//////////////// remove button click ///////////
$(document).on('click', '.class_rmv_itm', function(){  
    var rmv_id = $(this).attr("id");   
    // alert (rmv_id)
    $('#divis'+rmv_id+'').toggle('slow')
    $('#'+rmv_id+'').prop('checked', false);
});




/////////////customer item form submission
$('#cust_item_submit').submit(function(e) {

    e.preventDefault();

    // var formData = $(this).serialize();
    window.location.href =  base_url + "main/customer_order_confirm"


    // $.ajax({
    //     url : base_url + "main/customer_registration",
    //     type: 'POST',
    //     data: formData,
    //     success: function(data) {
    //         var response = JSON.parse(data);
    //         if (response.success) {
    //             window.location.href =  base_url + "main/customer_item"
        
    //         } else {
    //             alert(response.errors);
    //         }
    //     },
   
    // });
});




/////////////agent modal form submission
// $('#agent_form').submit(function(e) {

//     e.preventDefault();


// });

$('#agent_form_id').click(function(event){

    event.preventDefault();

    var agent_name = $('#agent_name').val();
    var agent_no = $('#agent_no').val();
    var agent_email = $('#agent_email').val();



    $.ajax({
        url : base_url + "main/add_agent_modal",
        type: "post",
        data: {
            agent_name:agent_name,agent_no:agent_no,agent_email:agent_email
        },
        success: function(data){

            $('#agent_modal').modal('hide');

            // console.log(data)
            // var question_order_view = document.getElementById("item");
            // question_order_view.innerHTML = data;
            $("#ser").load(location.href+" #ser>*","");
        }
    })
});







    // end of document ready
})


