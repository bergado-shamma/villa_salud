document.addEventListener('DOMContentLoaded', function() {
    const objectToggles = document.querySelectorAll('.object-toggle');
    const crudNavs = document.querySelectorAll('.crud-nav');
    const featureContents = document.querySelectorAll('.feature');

    objectToggles.forEach((toggle, index) => {
        toggle.addEventListener('click', (event) => {
            event.preventDefault();
            
            crudNavs.forEach(nav => nav.style.display = 'none');
            featureContents.forEach(content => content.style.display = 'none');

            const targetNav = toggle.nextElementSibling;
            const targetContent = document.getElementById(`${toggle.textContent.trim().toLowerCase()}-content`);
            
            if (targetNav && targetContent) {
                targetNav.style.display = 'block';
                targetContent.style.display = 'block';
            }
        });
    });
});

$(document).ready(function () {
    $('.nav-link').click(function (e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.feature').hide();
        $('#' + target).show();
    });
});
