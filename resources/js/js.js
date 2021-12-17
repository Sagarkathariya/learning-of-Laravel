function signup_success() {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Registered Successfully!!!',
        showConfirmButton: false,
        timer: 1500
    })
}

function signup() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Sorry! You do not have Permission. ',

        // footer: '<a href>Why do I have this issue?</a>'
    })
}

// function deletethis() {
//     Swal.fire({
//         title: 'Are you sure?',
//         text: "Want to delete!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             Swal.fire(
//                 'Deleted!',
//                 'Your file has been deleted.',
//                 'success'
//             )
//             deletethis();
//         }
//     })
//}

// function signup_success() {
//     Swal.fire({
//         // position: 'top-end',
//         icon: 'success',
//         title: 'Your work has been saved',
//         showConfirmButton: false,
//         timer: 1500
//     })
// }
function myClick() {

    var id = document.loginForm.id.value;
    var fullName = document.loginForm.fullName.value;
    var mobile = document.loginForm.mobile.value;
    var mac = document.loginForm.mac.value;
    var from = document.loginForm.from.value;
    var to = document.loginForm.to.value;

    if (id == null || id == "") {
        alert("ID can't be blank'");
        return false;
    } else if (fullName == null || fullName == "") {
        alert("Name can't be blank");
        return false;
    } else if (mobile.length < 10 && mobile.length > 10) {
        alert("Mobile should be 10 digits.");
        return false;
    } else if (mobile == null || mobile == "") {
        alert("Mobile can't be blank");
        return false;
    } else if (mac == null || mac == "") {
        alert("MAC can't be blank");
        return false;
    } else if (from == null || from == "") {
        alert("From Date can't be blank");
        return false;
    } else if (to == null || to == "") {
        alert("To Date can't be blank");
        return false;
    } else {
        alert("Saved Successfully!!!")
    }
}