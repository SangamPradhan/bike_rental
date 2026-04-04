$(document).ready(function(){
    // When the dropdown changes
    $("#appointmentType").change(function(){
        // If "Specify Service" is selected, show the additional input field
        if($(this).val() === "custom") {
            $("#specifyServiceInput").show();
        } else {
            // If another option is selected, hide the additional input field
            $("#specifyServiceInput").hide();
        }
    });
});

// const warningMessage = document.querySelector(".appointment-form-section .CaptchaWarning");
// const form = document.querySelector('form');
// form.addEventListener('submit', (e) =>{
//     e.preventDefault();
//     const captchaResponse = grecaptcha.getResponse();

//     if (!captchaResponse.length > 0){
//         // throw new Error("Captcha is not complete");
//         $("#CaptchaWarning").show();
//         // $("#CaptchaWarning").style.display = "block";
//         // warningMessage.style.display = "block";
//     }

//         // console.log(captchaResponse);
//         const fd = new FormData(e.target);
//         const params = new URLSearchParams(fd);

//         fetch('http://httpbin.org/post',{
//             method: "POST",
//             body: params,
//         })
//         .then(res => res.json())
//         .then(data => console.log("data",data))
//         .catch(err => console.log(err))
    
// })


