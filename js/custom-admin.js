jQuery(document).ready(function($) {
    var mediaUploader;

    $('.image-upload').click(function(e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('.meta-image').val(attachment.url);

        });
    

        mediaUploader.open();
    });
});



jQuery(document).ready(function($) {
    var mediaUploader;

    $('.image-upload1').click(function(e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('.meta-image1').val(attachment.url);

        });
    

        mediaUploader.open();
    });
});



jQuery(document).ready(function($) {
    var mediaUploader;

    $('.image-upload2').click(function(e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('.meta-image2').val(attachment.url);

        });
    

        mediaUploader.open();
    });
});



jQuery(document).ready(function($) {
    var mediaUploader;

    $('.image-upload3').click(function(e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('.meta-image3').val(attachment.url);

        });
    

        mediaUploader.open();
    });
});

