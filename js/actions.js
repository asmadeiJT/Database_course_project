
jQuery( document).ready(function($) {
    var studentsTableWrap = $('#students-table-wrap');

    studentsTableWrap.find('tr').on('click', function() {
        studentsTableWrap.find('tr').removeClass('info');
        $(this).addClass('info');
        var name = $(this).data('name'),
            lastName = $(this).data('last-name'),
            dateOfBirth = $(this).data('date-of-birth'),
            gpa = $(this).data('gpa');
        $('#inputName').val(name);
        $('#inputLastName').val(lastName);
        $('#inputDateOfBirth').val(dateOfBirth);
        $('#inputGPA').val(gpa);


    });

    $('#addButton').on('click', function() {
        var data = {
            action : 'insert',
            data : {
                name : $('#inputName').val(),
                last_name : $('#inputLastName').val(),
                date_of_birth : $('#inputDateOfBirth').val(),
                gpa : $('#inputGPA').val()
            }
        };
        console.log(data);

        $.post('../classes/Ajax.php', data, function(response) {
            studentsTableWrap.html(response)
        })
    })
});