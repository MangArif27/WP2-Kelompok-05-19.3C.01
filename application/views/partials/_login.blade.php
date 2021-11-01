<!DOCTYPE html>
<html>
@include('partials._head')
<body class="gray-bg">
  <div class="loginColumns animated fadeInDown">
    <div class="row">
      <?php $CI = get_instance(); ?>
      @if($CI->session->flashdata('message_login_error'))
      <div class="alert alert-danger col-md-12 alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <a class="alert-link" href="#"><?= $CI->session->flashdata('message_login_error') ?></a>.
      </div>
      @elseif($CI->session->flashdata('message_login_success'))
      <div class="alert alert-success col-md-12 alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <a class="alert-link" href="#"><?= $CI->session->flashdata('message_login_success') ?></a>.
      </div>
      @else
      @endif
      <div class="col-md-6">
        <h2 class="font-bold">Selamat Datang Di Sistem Informasi Layanan Pemasyarakatan</h2>
        <p>
          Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
        </p>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
        </p>
        <p>
          When an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <p>
          <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
        </p>
      </div>
      <div class="col-md-6">
        <div class="ibox-content">
          <form class="m-t" role="form" method="post" action="Proses/Login">
            <div class="form-group">
              <input type="number" name="NoIdentitas" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
              <input type="password" name="Password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            <a href="#">
              <small>Lupa Password</small>
            </a>
            <p class="text-muted text-center">
              <small>Apakah Kamu Belum Mempunyai Akun ?</small>
            </p>
            <a class="btn btn-sm btn-white btn-block" href="Registrasi">Klik Registrasi !</a>
          </form>
          <p class="m-t">
          </p>
        </div>
      </div>
    </div>
    <hr/>
    @include('partials._footer')
  </div>
  @include('partials._script')
</body>
</html>
