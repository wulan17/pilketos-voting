<div class="modal-dialog text-center">
  <div class="col-sm-10 main-section">
    <div class="modal-content">
      <div class="col-12 user-img">
        <img id="login" alt="Image Login">
      </div>
      <span id="salah"></span>
    <form method="post" action="logincek.php">
      <div class="form-group usr">
        <input class="form-control" id="usr" placeholder="Username" name="username" type="text" required="required">
      </div>
      <div class="form-group pw">
        <input type="password" id="pw" class="form-control" placeholder="Password" name="password" required="required">
      </div>
      <div class="row">
      <div class="custom-control custom-checkbox my-3 col-7">
        <input type="checkbox" class="custom-control-input" id="customCheck1" onclick="showpw()">
        <label class="custom-control-label font-color" for="customCheck1">Tampilkan password!!</label>
      </div>
      <div class="custom-control custom-checkbox my-3 col-5">
        <input type="checkbox" class="custom-control-input" id="customCheck2">
        <label class="custom-control-label font-color" for="customCheck2" name="ingat">Ingat saya</label>
      </div>
      </div>
      <button type="submit" name="simpan" class="btn"><i class="fas fa-sign-in-alt"></i> Masuk</button>
      <div class="text-right">
        <small><span class="font-color">Made by <a class="accent" href="https://kry9ton.tech">Dhimas XII TKJ-1</a></span></small>
      </div>
    </form>
    </div>
  </div>
</div>
    
<!-- Fungsi Show Password -->
<script>
function showpw() {
  var x = document.getElementById("pw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>