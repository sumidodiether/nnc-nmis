$(function() {
    var $sections = $('.form-section');

    function navigateTo(index) {
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index > 0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [type=submit]').toggle(atTheEnd);

        // Reset the styles for all step indicators
        $('.nav-link').css({
            'background-color': '',
            'color': ''
        });

        // Apply the active styles to the current step
        const step = document.querySelector('.step' + index);
        step.style.backgroundColor = "#64987e";
        step.style.color = "white";
    }

    function curIndex() {
        return $sections.index($sections.filter('.current'));
    }

    function validateSection(index) {
        var isValid = true;
        $sections.eq(index).find(':input[required]').each(function() {
            if (!this.value.trim()) {
                isValid = false;
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });
        return isValid;
    }

    $('.form-navigation .previous').click(function() {
        navigateTo(curIndex() - 1);
    });

    $('.form-navigation .next').click(function() {
        if (validateSection(curIndex())) {
            navigateTo(curIndex() + 1);
        }
    });

    $sections.each(function(index, section) {
        $(section).find(':input').attr('data-group', 'block-' + index);
    });

    navigateTo(0);
});
