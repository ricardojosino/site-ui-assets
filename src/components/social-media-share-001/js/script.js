function socialMediaShare001()
{
    jQuery(function($) {

        $('.social-media-share-001').each(function() {

            let url = $(this).attr('share-url')

            // Facebook
            $(this).find('.social-media-share-001--open-facebook').click(function(e) {
                e.preventDefault()
                let facebookUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url);
                window.open(facebookUrl, '_blank', 'width=600,height=400');
            })

            // linkdin
            $(this).find('.social-media-share-001--open-linkedin').click(function(e) {
                e.preventDefault()
                let linkedInUrl = 'https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(url);
                window.open(linkedInUrl, '_blank', 'width=600,height=400');
            })

            // Twitter
            $(this).find('.social-media-share-001--open-twitter').click(function(e) {
                e.preventDefault()
                let twitterUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(url);
                window.open(twitterUrl, '_blank', 'width=600,height=400');
            })

        })

    })
}

socialMediaShare001()