// Scroll ke atas
function backToTop() {

    window.scrollTo({

        top: 0,

        behavior: "smooth"

    });

}

// Konfirmasi hapus
function confirmDelete() {

    return confirm("Yakin ingin menghapus data ini?");

}

// Konfirmasi Logout
function confirmLogout(event) {

    event.preventDefault();

    const url = event.currentTarget.href;

    Swal.fire({

        title: "Logout?",

        text: "Apakah Anda yakin ingin keluar dari sistem?",

        icon: "question",

        showCancelButton: true,

        confirmButtonColor: "#dc3545",

        cancelButtonColor: "#6c757d",

        confirmButtonText: "Ya, Logout",

        cancelButtonText: "Batal"

    }).then((result) => {

        if (result.isConfirmed) {

            window.location.href = url;

        }

    });

}