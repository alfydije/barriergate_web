"use strict";
var endpoint = `${window.location.origin}/service`;
var token = localStorage.getItem('token');
var path = window.location.pathname;
var date = new Date();
var year = date.getFullYear();

(function ($) {
  $(document).ready(function () {
        $('#username').html('Loading...');
        $('#squadName').html('Loading...');
        $('#sidebar').html('Loading...');
        $('#year').html(year);
        $.ajax({
            type: 'get',
            url: `${endpoint}/profile`,
            cache: false,
            processData: false,
            contentType: false,
            headers: {
                "Authorization": `Bearer ${token}`,
            },
            success: function (result) {
                $('#username').html(result.name);
                $('#squadName').html(result.squad_name === undefined ? "Akun Belum Aktif!" : result.squad_name);
                if (result.squad_name === undefined) $('#status-message').html(`<h5 class="text-danger text-center">${result.status}</h5>`)
                validationMenu(result.squad_name);
            },
            error: function (err) {
                if (err.status == 401) {
                    window.location.href = "/login";
                }
            }
        });
    });

})(jQuery);

function validationMenu(role) {
    if (role === "KEMENPRIN") {
        $('#sidebar').html(`
        <ul class="nav">
        <li class="nav-item nav-category">DASHBOARD</li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar-squad">
            <i class="menu-icon mdi mdi-office-building"></i>
            <span class="menu-title">Squad</span>
          </a>
        </li>
        <li class="nav-item nav-category">POST DATA</li>
        <li class="nav-item">
          <a class="nav-link" href="post-event">
            <i class="menu-icon  mdi mdi-seal"></i>
            <span class="menu-title">Event</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post-berita">
            <i class="menu-icon  mdi mdi-newspaper"></i>
            <span class="menu-title">Berita</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post-category">
            <i class="menu-icon  mdi mdi-gamepad"></i>
            <span class="menu-title">Category</span>
          </a>
        </li>
        <li class="nav-item nav-category">Settings</li>
        <li class="nav-item">
          <a class="nav-link" href="/setting">
            <i class="mdi mdi-wrench menu-icon"></i>
            <span class="menu-title">Enhancment</span>
          </a>
        </li>
      </ul>
        `)
    }

    if (role !== "KEMENPRIN") {
        $('#sidebar').html(`
        <ul class="nav">
            <li class="nav-item nav-category">DASHBOARD</li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar-startup">
                <i class="menu-icon  mdi mdi-chip"></i>
                <span class="menu-title">Start Up</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar-asosiasi">
                <i class="menu-icon  mdi mdi-city"></i>
                <span class="menu-title">Asosiasi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar-komunitas">
                <i class="menu-icon  mdi mdi-lan"></i>
                <span class="menu-title">Komunitas</span>
              </a>
            </li>
            <li class="nav-item nav-category">POST DATA</li>
            <li class="nav-item">
              <a class="nav-link" href="post-event">
                <i class="menu-icon  mdi mdi-seal"></i>
                <span class="menu-title">Event</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post-berita">
                <i class="menu-icon  mdi mdi-newspaper"></i>
                <span class="menu-title">Berita</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post-category">
                <i class="menu-icon  mdi mdi-gamepad"></i>
                <span class="menu-title">Category</span>
              </a>
            </li>
          </ul>
          `)
    }

    if (role !== 'KEMENPRIN' && (path === '/daftar-squad' || path === '/setting')) {
        localStorage.removeItem('token');
        window.location.href = "/login";
    }
}

function logout() {
    swal({
        title: 'peringatan!',
        text: `Apakah anda yakin akan melakukan logout?`,
        icon: 'warning',
        button: 'OK'
    }).then(function (result) {
        if (result) {
            $.ajax({
                type: 'POST',
                url: `${endpoint}/logout`,
                cache: false,
                processData: false,
                contentType: false,
                headers: {
                    "Authorization": `Bearer ${token}`,
                },
                success: function (result) {
                    swal({
                        title: 'Success!',
                        text: `${result.message}`,
                        icon: 'success',
                        button: 'OK'
                    }).then(() => {
                        localStorage.removeItem('token');
                        window.location.href = "/login";
                    })
                },
                error: function (err) {
                    if (err.status == 401) {
                        window.location.href = "/login";
                    }
                }
            });
        }
    });
}