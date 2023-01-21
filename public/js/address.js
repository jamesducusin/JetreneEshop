

var my_handlers = {

    fill_provinces: function () {
        var region_code = $(this).val();
        $('#province').ph_locations('fetch_list', [{
            "region_code": region_code
        }]);
        var x = $('#region').find(":selected").text();
        document.getElementById("vregion").value = x;
        document.getElementById("vprovince").value = "";
        document.getElementById("province").value = "";
        document.getElementById("vcity").value = "";
        document.getElementById("city").value = "";
        document.getElementById("vbarangay").value = "";
        document.getElementById("barangay").value = "";
    },

    fill_cities: function () {

        var province_code = $(this).val();
        $('#city').ph_locations('fetch_list', [{
            "province_code": province_code
        }]);
        var x = $('#province').find(":selected").text();
        document.getElementById("vprovince").value = x;
        document.getElementById("vcity").value = "";
        document.getElementById("city").value = "";
        document.getElementById("vbarangay").value = "";
        document.getElementById("barangay").value = "";
    },

    fill_barangays: function () {

        var city_code = $(this).val();
        $('#barangay').ph_locations('fetch_list', [{
            "city_code": city_code
        }]);
        var x = $('#city').find(":selected").text();
        document.getElementById("vcity").value = x;
        document.getElementById("vbarangay").value = "";
        document.getElementById("barangay").value = "";
    },

    get_barangay: function () {
        var x = $('#barangay').find(":selected").text();
        document.getElementById("vbarangay").value = x;
    },


};

$(function () {
    $('#region').on('change', my_handlers.fill_provinces);
    $('#province').on('change', my_handlers.fill_cities);
    $('#city').on('change', my_handlers.fill_barangays);
    $('#barangay').on('change', my_handlers.get_barangay);

    $('#region').ph_locations({
        'location_type': 'regions'
    });
    $('#province').ph_locations({
        'location_type': 'provinces'
    });
    $('#city').ph_locations({
        'location_type': 'cities'
    });
    $('#barangay').ph_locations({
        'location_type': 'barangays'
    });

    $('#region').ph_locations('fetch_list');
});

$('#editAddress').on('show.bs.modal', function(event) {
    var link = $(event.relatedTarget) // Button that triggered the modal
    var name = link.closest('td').data('name');
    var contact = link.closest('td').data('contact');
    var street = link.closest('td').data('street');
    var postalcode = link.closest('td').data('postalcode');
    var label_as = link.closest('td').data('label_as');
    var is_default = link.closest('td').data('default');
    var id = link.closest('td').data('id');
    var modal = $(this)
    modal.find('#nameInput').val(name)
    modal.find('#contactInput').val(contact)
    modal.find('#streetInput').val(street)
    modal.find('#postalcodeInput').val(postalcode)
    modal.find('#labelInput').val(label_as)
    modal.find('#idHidden').val(id)
})

$('table input[type="radio"]').on('click', function() {
    var id = this.dataset.id;
    window.location.href = 'setDefault/' + id;
});

$('#deleteAddress').on('show.bs.modal', function(event) {
    var link = $(event.relatedTarget) // Button that triggered the modal
    var id = link.closest('td').data('id');
    var modal = $(this)
    modal.find('#deleteid').val(id)
    
});


