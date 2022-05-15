jQuery(function($) {
    $(document).ready(
        $.ajax({
            url: '/wp-content/themes/qa/data.php',

            method: 'get',
            dataType: 'html',

            success: function(data) {
                alert(data);
            }
        })
    )
})