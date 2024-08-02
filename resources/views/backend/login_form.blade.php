<style>
    * {
  margin: 0;
  padding: 0;
  /* user-select: none; */
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
html,
body {
  height: 100%;
}
body {
  display: grid;
  place-items: center;
  background: #dde1e7;
  text-align: center;
}

header {
  position: fixed;
  left: 0;
  right: 0;
  margin: auto;
  top: 0.5rem;
  text-align: center;
  color: #222;
}
header .social li {
  margin-top: 20px;
  list-style: none;
}
header .social li > a {
  position: relative;
  font-size: 20px;
  color: #222;
  margin: 10px;
  text-decoration: none;
  transition: all 0.3s;
}
header .social li > a:last-child {
  border: 1px solid #222;
  font-size: 16px;
  background: #222;
  color: #dde1e7;
  padding: 1px 5px;
}
header .social li a:last-child:hover {
  border-color: grey;
  background: grey;
  color: #dde1e7;
}
header .social li > a:hover {
  color: grey;
}
header .social li > a:before {
  content: "";
  position: absolute;
  bottom: -1rem;
  left: 0;
  background-color: #222;
  width: 20px;
  height: 4px;
  opacity: 0;
  transition: all 0.3s;
}
header .social li > a:hover:before {
  opacity: 1;
  background-color: grey;
}

.content {
  width: 330px;
  padding: 40px 30px;
  background: #dde1e7;
  border-radius: 10px;
  box-shadow: -3px -3px 7px #ffffff73, 2px 2px 5px rgba(94, 104, 121, 0.288);
}
.content .text {
  font-size: 33px;
  font-weight: 600;
  margin-bottom: 35px;
  color: #595959;
}
.field {
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}
.field:nth-child(2) {
  margin-top: 20px;
}
.field input {
  height: 100%;
  width: 100%;
  padding-left: 45px;
  outline: none;
  border: none;
  font-size: 18px;
  background: #dde1e7;
  color: #595959;
  border-radius: 25px;
  box-shadow: inset 2px 2px 5px #babecc, inset -5px -5px 10px #ffffff73;
}
.field input:focus {
  box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #ffffff73;
}
.field span {
  position: absolute;
  color: #595959;
  width: 50px;
  line-height: 50px;
}
.field label {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 45px;
  pointer-events: none;
  color: #666666;
}
.field input:valid ~ label {
  opacity: 0;
}
.forgot-pass {
  text-align: left;
  margin: 10px 0 10px 5px;
}
.forgot-pass a {
  font-size: 16px;
  color: #3498db;
  text-decoration: none;
}
.forgot-pass:hover a {
  text-decoration: underline;
}
button {
  margin: 15px 0;
  width: 100%;
  height: 50px;
  font-size: 18px;
  line-height: 50px;
  font-weight: 600;
  background: #dde1e7;
  border-radius: 25px;
  border: none;
  outline: none;
  cursor: pointer;
  color: #595959;
  box-shadow: 2px 2px 5px #babecc, -5px -5px 10px #ffffff73;
}
button:focus {
  color: #3498db;
  box-shadow: inset 2px 2px 5px #babecc, inset -5px -5px 10px #ffffff73;
}
.sign-up {
  margin: 10px 0;
  color: #595959;
  font-size: 16px;
}
.sign-up a {
  color: #3498db;
  text-decoration: none;
}
.sign-up a:hover {
  text-decoration: underline;
}

footer {
  position: fixed;
  bottom: 2rem;
  left: 2rem;
}
footer .links a {
  display: flex;
  line-height: 30px;
  text-decoration: none;
  color: #222;
  font-weight: 700;
  font-size: 20px;
  z-index: 999;
}
footer .links a > i {
  line-height: 30px;
  padding-right: 15px;
}
footer .links a:last-child i {
  color: blue;
}
footer .links .coffee {
  width: 300px;
  position: fixed;
  bottom: -2rem;
  left: -2.7rem;
  z-index: -99;
}

</style>
<div class="content">
  <div class="text">
    Login Form
  </div>

  <form action="{{route('do.login')}}" method="post">
    @csrf
    <div class="field">
      <input type="text" name="email" required>
      <span class="fas fa-user"></span>
      <label>Email</label>
    </div>
    <div class="field">
      <input type="password" name="password" required>
      <span class="fas fa-lock"></span>
      <label>Password</label>
    </div>
    <div class="forgot-pass">
      <a href="#">Forgot Password?</a>
    </div>
    <button>Sign in</button>
    <div class="sign-up">
      Not a member?
      <a href="#">signup now</a>
    </div>
  </form>

</div>

<footer>
  <div class="links">
    <a href="https://www.buymeacoffee.com/danishlaeeq">
      <img src="https://i.giphy.com/media/513lZvPf6khjIQFibF/giphy.webp" alt="buy me a coffee" class="coffee" />
    </a>
    <a target="_blank" href="https://www.paypal.com/paypalme/danishlaiq">
      <i class="fab fa-paypal"></i>
      Donate</a>
  </div>
</footer>