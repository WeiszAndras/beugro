$(document).ready(function($) {
    // filter selection from pcb
    $('#products').change(function() {
        $('#prod').show();
        let selection = $(this).val();
        let dataset = $('#prod').find('tr');
        dataset.show();

        dataset.filter(function(index, item) {
            if($(item).find('td:nth-child(2)').text() !== selection){
                return $(item).find('td:nth-child(2)').text();
            }
        }).hide();
        // See all data
        if( selection === "All data"){
            $('#prod').show();
            dataset.show();
        }
    });
});
