$(document).ready(function() {
$('#search').on('keyup', function() {
    var keyword = $(this).val();

    $.ajax({
    url: 'search_live.php',
    type: 'GET',
    data: { keyword: keyword },
    success: function(data) {
        $('#result-data').html(data);
    }
    });
});
});
