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

$( document ).ready(function() {
    $('.btn-delete').click(function () {
        if(confirm('Are you sure wanna delete this game?')){
            var deleteId = $(this).attr('id').replace('btn-delete-', '');
            var currentItem = $(this);
            $.ajax({
                url:'/game/' + deleteId,
                method: 'DELETE',
                data:{
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
});
