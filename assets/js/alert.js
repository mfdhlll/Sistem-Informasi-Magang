function success(message) {

    Swal.fire({

        icon: 'success',

        title: 'Berhasil',

        text: message

    });

}

function error(message) {

    Swal.fire({

        icon: 'error',

        title: 'Oops...',

        text: message

    });

}