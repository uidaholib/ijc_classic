
// Window Scroll event.
$(window).scroll(function()
{
    // If the scroll amount is larger than the window height then show "Scroll To Top" link.
    if ($(window).scrollTop() > $(window).height())
    {
        $('#scrollToTop').show('slow'); // Show "Scroll To Top" link.
    }
    else
    {
        $('#scrollToTop').hide('slow'); // Hide "Scroll To Top" link.
    }
});