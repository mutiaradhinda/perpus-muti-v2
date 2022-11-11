<?php
  use Illuminate\Support\Facades\Auth;

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">


<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

   <?php if(Auth::user()->id_user_role == 1){ ?>
      @include('/layouts/_menu-admin')
    <?php } ?>
    
    <?php if(Auth::user()->id_user_role == 2){ ?>
      @include('/layouts/_menu-pegawai')
    <?php } ?>

  </aside>