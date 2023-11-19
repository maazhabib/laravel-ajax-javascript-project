
class RecordDeleter {
    constructor() {
        this.bindEvents();
    }

    bindEvents() {
        $(document).on('click', '.deleteRecord', (event) => {
            this.handleDeleteRecord(event);
        });
    }

    handleDeleteRecord(event) {
        $('.alert').fadeIn();
        const id = $(event.target).data("id");
        const token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: $(event.target).data('url'),
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token
            },
            success: this.handleSuccess.bind(this, id),
            error: this.handleError.bind(this)
        });
    }

    handleSuccess(id, data) {
        $(`#tr_${id}`).remove();
        $('.alert').addClass('alert-success').html(data.success);
        setTimeout(() => {
            $('.alert').fadeOut();
        }, 2000);

        if ($('.list-table >tbody >tr').length === 0) {
            $('.list-table >tbody').append(`
                    <tr class="text-center">
                        <td colspan="100%">No record found.</td>
                    </tr>
                `);
        }
    }

    handleError(data) {
        $('.alert').addClass('alert-danger').html(data.responseJSON.error);
        setTimeout(() => {
            $('.alert').fadeOut();
        }, 2000);
    }
}

// Instantiate the class when the document is ready
$(document).ready(() => {
    new RecordDeleter();
});
