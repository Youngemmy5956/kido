require("./bootstrap");
let tab = document.querySelectorAll(".tab");
let tabc = document.querySelectorAll(".tab-c");
let deposite = document.querySelector(".deposite");
let depoContent = document.querySelector(".depoContent");
let terminate = document.querySelector(".terminate");
let wterminate = document.querySelector(".wterminate");

terminate.addEventListener("click", function () {
    depoContent.classList.add("hidden");
});

deposite.addEventListener("click", function () {
    depoContent.classList.remove("hidden");
});

tab[0].classList.add("bg-green-500");
tab[0].firstElementChild.classList.add("text-white");

tabc[0].classList.remove("hidden");

tab.forEach((val, index) => {
    val.addEventListener("click", function () {
        tab.forEach((rec, index) => {
            rec.classList.remove("bg-green-500");
            rec.firstElementChild.classList.remove("text-white");
            tabc.forEach((data) => {
                data.classList.add("hidden");
            });
        });
        tabc[index].classList.remove("hidden");
        val.classList.add("bg-green-500");
        val.firstElementChild.classList.add("text-white");
    });
});

// withdraw

let withdrawContent = document.querySelector(".withdrawContent");

let withdraw = document.querySelector(".withdraw");

withdraw.addEventListener("click", function (e) {
    e.preventDefault();

    withdrawContent.classList.remove("hidden");
});

wterminate.addEventListener("click", function () {
    withdrawContent.classList.add("hidden");
});

// wallet generation

let wallet = document.querySelector(".wallet");
let amount = document.querySelector(".amount");
let id = document.querySelector(".id");
let error = document.querySelector(".err");
let user_id = document.querySelector(".user_id");
let file = document.querySelector(".file");

wallet.addEventListener("click", () => {
    if (!/[1-9]/.test(amount.value) || amount.value.startsWith("-")) {
        error.innerHTML = "Amount should Not be less than 1 USDT";
        setTimeout(() => {
            error.innerHTML = " ";
        }, 5000);
        return false;
    }

    if (!file.files[0]) {
        error.innerHTML = "You must Upload prove of payment";
        setTimeout(() => {
            error.innerHTML = " ";
        }, 5000);
    }

    if (!id.value) {
        error.innerHTML = "A valid transaction ID is Required";
        setTimeout(() => {
            error.innerHTML = " ";
        }, 5000);
    }

    let formdata = new FormData();

    formdata.append("amount", amount.value);
    formdata.append("id", id.value);
    formdata.append("user_id", user_id.value);
    formdata.append(
        "file",
        file.files[0],
        `prove.${file.files[0].type.replace("image/", "")}`
    );

    fetch("http://localhost:8000/api/user/approval", {
        mode: "no-cors",
        method: "post",
        headers: {
            Accept: "application/json",
            "Content-Type": "Application/json",
        },
        body: formdata,
    })
        .then((res) => res.json())
        .then((val) => {
            if (/Payment/gi.test(val.data)) {
                let n = error
                    .getAttribute("class")
                    .replace("text-red-600", "text-green-600");
                error.setAttribute("class", n);
                error.innerHTML = val.data;
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
            console.log(val);
        });
});
