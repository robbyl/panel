function saveCourses() {
    $.ajax({
        url: 'save_courses.php',
        data: $('#form-courses').serialize(),
        type: 'POST',
        dataType: 'html',
        beforeSend: function() {
            $('#status').html('<div class="success">Processing...</div>');
        },
        success: function(data, textStatus, xhr) {
            $('#status').html(data);
        },
        error: function(xhr, textStatus, errorThrown) {
            $('#status').html('<div class="error">Cannot save courses, Please try again</div>');
        }
    });
}
