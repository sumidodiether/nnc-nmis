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

$(document).ready(function() {
    function loadRegions() {
        $.ajax({
            url: '{{ route("regions.get") }}',
            method: 'GET',
            success: function(response) {
                console.log('Regions:', response);  // Debug log
                let regionSelect = $('#loadRegion');
                regionSelect.find('option:not(:first)').remove();
                response.forEach(function(region) {
                    regionSelect.append(new Option(region.region, region.id));
                });
            },
            error: function(xhr, status, error) {
                alert('Error loading regions');
            }
        });
    }

    function loadProvincesByRegion(regionId) {
        $.ajax({
            url: '{{ url("provinces") }}/' + regionId,
            method: 'GET',
            success: function(response) {
                let provinceSelect = $('#loadProvince');
                provinceSelect.find('option:not(:first)').remove();
                response.forEach(function(province) {
                    provinceSelect.append(new Option(province.province, province.provcode));
                });
            },
            error: function(xhr, status, error) {
                alert('Error loading provinces');
            }
        });
    }

    function loadCitiesByProvince(provcode) {
        $.ajax({
            url: '{{ url("cities") }}/' + provcode,
            method: 'GET',
            success: function(response) {
                let citySelect = $('#loadCity');
                citySelect.find('option:not(:first)').remove();
                response.forEach(function(city) {
                    citySelect.append(new Option(city.cityname, city.id));
                });
            },
            error: function(xhr, status, error) {
                alert('Error loading cities');
            }
        });
    }

    // Initial load
    loadRegions();

    // Event listener for region change
    $('#loadRegion').change(function() {
        let selectedRegionId = $(this).val();
        if (selectedRegionId) {
            loadProvincesByRegion(selectedRegionId);
            $('#loadCity').find('option:not(:first)').remove();
        } else {
            $('#loadProvince').find('option:not(:first)').remove();
            $('#loadCity').find('option:not(:first)').remove();
        }
    });

    // Event listener for province change
    $('#loadProvince').change(function() {
        let selectedProvcode = $(this).val();
        if (selectedProvcode) {
            loadCitiesByProvince(selectedProvcode);
        } else {
            $('#loadCity').find('option:not(:first)').remove();
        }
    });
});