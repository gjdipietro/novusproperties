<!-- contactform -->
<section class="c-contact">
    <div class="o-container__inner">
        <h2 class="c-contact__title">
            <?php echo (!get_post_meta($post->ID, 'contactFormHeading', true)) ? 'Contact us for a free consultation and a free real estate book.' : get_post_meta($post->ID, 'contactFormHeading', true); ?>
        </h2>
        <div class="c-contact__form">
        <script type="text/javascript" src="//my.reiblackbook.com/forms/web-form-165057.js"></script><script>
            window.onload=function(){
            var message = {
                "loc":window.location.href,
                "type":"framedForm"
            };
            document.getElementById("form_iframe_165057").contentWindow.postMessage(JSON.stringify(message),"*");
            };
        </script>
        </div>
        <p class="c-contact__fineprint">
            Your information will never be shared with any third party.
        </p>
    </div>
</section>
<!-- /contactform -->
