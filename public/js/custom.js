// var a = new Array();
// a.push(1);
// a.push(2);
// a.push(3);
//
// console.log(a);
// $.ajax({
//     url:'/game/delete-many',
//     method:'POST',
//     data: {
//         '_token': $('meta[name=csrf-token]').attr("content"),
//         'ids': [2,4]
//     },
//     success: function () {
//         alert("ok");
//     },
//     error: function () {
//         alert("112");
//     }
// });
var BASE_URL = 'http://127.0.0.1:8000';

$(document).ready(function () {

    $('.btn-delete').click(function () {
        if (confirm('Are you sure wanna delete this game?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-', '');
            var currentItem = $(this);
            $.ajax({
                url: '/game/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function () {
                    alert('Success');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Error');
                }
            });
        }
    });

    $('#check-all').change(function () {
        $('.check-item').prop('checked', $(this).is(':checked'));
    });

    $('#btn-apply-all').click(function () {
        // kiểm tra người dùng đã check phần tử chưa.
        var arrayId = new Array();
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
            return;
        }
        // kiểm tra người dùng đã chọn thao tác chưa.
        var action = $('#select-action').val();
        if (action == 0) {
            alert('Vui lòng chọn thao tác muốn thực hiện!');
            return;
        }

        // confirm lại người dùng.
        if (confirm('Bạn có chắc muốn thực hiện thao tác ')) {
            changeStatus(arrayId, action);
        }
    });

    $('.btn-edit').click(function () {
        var editId = $(this).attr('id').replace('btn-edit-', '');
        $.ajax({
            url: '/game/get-by-id/' + editId,
            method: 'GET',
            success: function (response) {
                $('input[name="name"]').val(response.data.name);
                $('#exampleModal').modal('show');
            },
            error: function () {
                alert('Error');
            }
        });
    });

    $('#btn-search').click(function () {
        var page = $('input[name="currentPage"]').val();
        var categoryId = $('select[name="categoryId"]').val();
        var keyword = $('input[name="keyword"]').val();
        location.href = `${BASE_URL}/game?page=${page}&category_id=${categoryId}&keyword=${keyword}`;
    });
});

function changeStatus(arrayId, status) {
    $.ajax({
        url: '/game/change-status',
        method: 'POST',
        data: {
            '_token': $('meta[name=csrf-token]').attr("content"),
            'ids': arrayId,
            'status': status
        },
        success: function () {
            alert("Thao tác thành công, reload lại page!");
            location.reload();
        },
        error: function () {
            alert("Thao tác thất bại, vui lòng thử lại sau");
        }
    });
}