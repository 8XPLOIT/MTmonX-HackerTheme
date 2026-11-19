<?php
/*
 *  Copyright (C) 2018 Laksamadi Guko.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();
// hide all error
error_reporting(0);
if (!isset($_SESSION["mikhmon"])) {
  header("Location:../admin.php?id=login");
} else {
}
?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3><i class="fa fa-info-circle"></i> About</h3>
      </div>
      <div class="card-body">
        <h3>&gt; MTmonX V<?= $_SESSION['v']; ?></h3>
        <p><b>Mod by Kapten Nemo 2026</b></p>
        <p>Aplikasi manajemen hotspot MikroTik dengan tampilan baru bergaya terminal. Semoga makin sukses.</p>
        <ul>
          <li>Versi : 3.99 (20-11-2026)</li>
          <li>Mod &amp; Tema : Kapten Nemo</li>
          <li>Tema : Dark Flat &amp; Light Flat</li>
          <li>Original Author : Laksamadi Guko</li>
          <li>Licence : <a href="https://github.com/laksa19/mikhmonv2/blob/master/LICENSE">GPLv2</a></li>
          <li>API Class : <a href="https://github.com/BenMenking/routeros-api">routeros-api</a></li>
        </ul>
        <p>Terima kasih untuk semua yang telah mendukung pengembangan MTmonX.</p>
        <div><i>Copyright &copy; 2026 Kapten Nemo &mdash; based on Mikhmon &copy; 2018 Laksamadi Guko</i></div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3><i class="fa fa-info-circle"></i> Changelog</h3>
      </div>
      <div class="card-body">
        <h3>Update 20-11-2026 V3.99 &mdash; Mod by Kapten Nemo</h3>
        <ul>
          <li>Tampilan baru bergaya terminal / hacker dengan huruf JetBrains Mono.</li>
          <li>Dua tema: Dark Flat dan Light Flat.</li>
          <li>Kotak dashboard dibuat polos berbingkai, garis pemisah ikon dihapus.</li>
          <li>Tampilan responsive untuk HP, tablet, dan desktop.</li>
          <li>Halaman About dan Changelog diperbarui.</li>
        </ul>
        <h3>Update 30-06-2021 V3.20</h3>
        <ul>
          <li>Perbaikan typo script profile on-login.</li>
        </ul>
        <h3>Update 24-01-2021</h3>
        <ul>
          <li>Penambahan docker-compose.yml untuk test-lab.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
