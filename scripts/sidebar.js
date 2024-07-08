$(document).ready(function() {
    $('.dropdown-toggle').click(function(e) {
        e.preventDefault();
        var $this = $(this);
        var target = $this.next('.dropdown-content');
        
        $('.dropdown-content').not(target).slideUp();
        target.slideToggle();
    });

    $('.dropdown-content a').click(function(e) {
        e.preventDefault();
        var targetId = $(this).attr('data-target');
        
        $('.feature').not('#' + targetId).hide();
        $('#' + targetId).show();
    });
});
