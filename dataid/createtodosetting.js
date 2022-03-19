$(document).ready(function() {
    $('.delete_to_do').click(function() {
        const Id = $(this).attr('id');
        $.post("Models/delete.php", {
                id: Id
            },
            (obj) => {
                if (obj) {
                    $(this).parent().hide(600);
                }
            }
        );
    });

    $(".check-box").click(function(e) {
        const id = $(this).attr('data_todo_id');

        $.post('Models/check.php', {
                id: id
            },
            (obj) => {
                if (obj != 'error') {
                    const h2 = $(this).next();
                    if (obj === '1') {
                        h2.removeClass('checked');
                    } else {
                        h2.addClass('checked');
                    }
                }
            }
        );
    });
});