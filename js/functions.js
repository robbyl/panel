function saveCourses() {
    $.ajax({
        url: 'save_courses.php',
        data: $('#form-courses').serialize(),
        type: 'POST',
        dataType: 'html',
        beforeSend: function () {
            $('#status').html('<div class="success">Processing...</div>');
        },
        success: function (data, textStatus, xhr) {
            $('#status').html(data);
            $('.success').delay(5000).fadeOut('slow');
        },
        error: function (xhr, textStatus, errorThrown) {
            $('#status').html('<div class="error">Cannot save courses, Please try again</div>');
        }
    });
}

function saveNews() {
    $.ajax({
        url: 'save_news.php',
        data: $('#save-news').serialize(),
        type: 'POST',
        dataType: 'html',
        beforeSend: function () {
            $('#status').html('<div class="success">Processing...</div>');
        },
        success: function (data, textStatus, xhr) {
            $('#status').html(data);
            $('.success').delay(5000).fadeOut('slow');
        },
        error: function (xhr, textStatus, errorThrown) {
            $('#status').html('<div class="error">Cannot save news, Please try again</div>');
        }
    });
}

function saveAds() {
    $.ajax({
        url: 'save_ads.php',
        data: new FormData($('#ads-form')[0]),
        processData: false,
        contentType: false,
        type: 'POST',
        dataType: 'html',
        beforeSend: function () {
            $('#status').html('<div class="success">Processing...</div>');
        },
        success: function (data, textStatus, xhr) {
            $('#ads-image').html(data);
            $('#status').html('<div class="success">Add saved successfully!</div>');
            $('.success').delay(5000).fadeOut('slow');
        },
        error: function (xhr, textStatus, errorThrown) {
            $('#status').html('<div class="error">Cannot save ad, Please try again</div>');
        }
    });
}
