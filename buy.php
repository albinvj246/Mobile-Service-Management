<center><div class="wrapper">
    <div class="container">
        <form action="">
            <h1>
                <i class="fas fa-shipping-fast"></i>
                Shipping Details
            </h1>
            <div class="name">
                <div>
                    <label for="f-name">First</label>
                    <input type="text" name="f-name">
                </div>
                <div>
                    <label for="l-name">Last</label>
                    <input type="text" name="l-name">
                </div>
            </div>
            <div class="street">
                <label for="name">Street</label>
                <input type="text" name="address">
            </div>
            <div class="address-info">
                <div>
                    <label for="city">City</label>
                    <input type="text" name="city">
                </div>
                <div>
                    <label for="state">State</label>
                    <input type="text" name="state">
                </div>
                <div>
                    <label for="zip">Zip</label>
                    <input type="text" name="zip">
                </div>
            </div>
            <h1>
                <i class="far fa-credit-card"></i> Payment Information
            </h1>
            <div class="cc-num">
                <label for="card-num">Credit Card No.</label>
                <input type="text" name="card-num">
            </div>
            <div class="cc-info">
                <div>
                    <label for="card-num">Exp</label>
                    <input type="text" name="expire">
                </div>
                <div>
                    <label for="card-num">CCV</label>
                    <input type="text" name="security">
                </div>
            </div>
            <div class="btns">
                <button>Purchase</button>
              
            </div>
        </form>
    </div>
</div>
</center>
<style>

@import url('https://fonts.googleapis.com/css?family=Arimo');
$coral: #eb9478;
$maroon: #8e2807;
$title: #493b76;

body {
    display: flex;
    justify-content: center;
}

.wrapper {
    margin-top: 5%;
    width: 60%;
    display: flex;
    justify-content: center;
    font-family: "Arimo";
    background-color: $coral;
    -webkit-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    -moz-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    animation: slideUp 2000ms ease;
}

@keyframes slideUp {
    0% {
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
        visibility: visible;
    }

    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);

    }
}

.container {
    width: 65%;
    padding: 5% 10%;
}

h1 {
    align-self: center;
}

form {
    width: 100%;

    .* {
        margin-top: 20px;
    }

    .input {
        width: 100%;
        min-height: 25px;
        border: 0;
        font-size: 1rem;
        letter-spacing: .15rem;
        font-family: "Arimo";
        margin-top: 5px;
        color: $maroon;
        border-radius: 4px;
    }

    .label {
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 2px;
        color: $maroon;
    }

    .h1 {
        font-size: 24px;
        line-height: 10px;
        color: $title;
        letter-spacing: 1px;
    }

    .h1:nth-of-type(2) {
        margin-top: 10%;
    }
}

.name {
    justify-content: space-between;
    display: flex;
    width: 100%;

    div {
        width: 45%;
    }
}

.address-info {
    display: flex;
    justify-content: space-between;

    div {
        width: 30%;
    }
}

.cc-info {
    display: flex;
    justify-content: space-between;

    div {
        width: 45%;
    }
}

.btns {
    display: flex;
    flex-direction: column;
    align-items: flex-end;

    .button {
        margin: 3px 0;
        height: 30px;
        width: 40%;
        color: #cfc9e1;
        background-color: #4a3b76;
        text-transform: uppercase;
        border: 0;
        border-radius: .3rem;
        letter-spacing: 2px;

        &:hover {
            animation-name: btn-hov;
            animation-duration: 550ms;
            animation-fill-mode: forwards;
        }
    }
}

@keyframes btn-hov {
    100% {
        background-color: #cfc9e1;
        color: #4a3b76;
        transform: scale(1.05)
    }
}

input:focus,
button:focus {
    outline: none;
}

@media (max-width: 736px) {
    .wrapper {
        width: 100%;
    }

    .container {
        width: 100%;
    }

    .btns {
        align-items: center;

        button {
            width: 50%;
        }
    }

    form h1 {
        text-align: center;
    }

    .name,
    .address-info,
    .cc-info {
        flex-direction: column;
        width: 100%;
        justify-content: space-between;

        div {
            align-items: center;
            flex-direction: column;
            width: 100%;
            display: flex;
        }
    }

    .street,
    .cc-num {
        text-align: center;
    }

    input {
        margin: 5px 0;
        min-height: 30px;
    }
}
</style>
</html>