$(document).ready(function () {
    $("#submit").click(function () {
        var empname = $("#ename").val();
        var empemail = $("#eemail").val();
        var empmobile = $("#emobile").val();
        var emailpattern = /^\w+[a-zA-Z0-9\.-]+@([a-z])+(\.[a-z]{2,3})+$/g
        var mobilepattern = /^\d{10}$/g
        if (empname == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Enter Employee Name',
                footer: 'Marked As Mandatory'
            })
        }
        else if (empemail == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Enter Employee Email',
                footer: 'Marked As Mandatory'
            })
        }
        else if (empmobile == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Enter Employee Mobile',
                footer: 'Marked As Mandatory'
            })
        }
        else if (emailpattern.test(empemail) == false) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Invalid Email Address Found !!',
            })
        }
        else if (mobilepattern.test(empmobile) == false) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Invalid Mobile Number Found !!',
            })
        }
        else {
            $.ajax({
                url: "../backend/enrollcode.php",
                type: "post",
                async: false,
                data: {
                    "empname": empname,
                    "empemail": empemail,
                    "empmobile": empmobile
                },
                success: function (data) {
                    if(data==="DE")
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Duplicate Email-ID Found !!',
                        })
                    }
                    else if(data==="DM")
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Duplicate Mobile Number  Found !!',
                        })
                    }
                    else
                    {
                        Swal.fire({
                            icon: 'success',
                            title: 'Good Job',
                            text: 'Candidate Registration Success !!',
                        })
                        document.getElementById("form").reset();
                    }
                }

            });
        }

    });
}); 