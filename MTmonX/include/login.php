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


?>

<div class="login-box">
  <div class="card">
    <div class="card-header">
      <h3><?= $_please_login ?></h3>
    </div>
    <div class="card-body">
      <div class="text-center" style="margin-bottom: 4px;">
        <img src="img/favicon.png" alt="MTmonX Logo">
      </div>
      <div class="text-center">
        <span style="font-size: 25px; margin: 10px;">MTmonX</span>
      </div>
      <form autocomplete="off" action="" method="post" style="width:100%;">
        <div style="margin-bottom: 14px;">
          <input class="form-control" type="text" name="user" id="_username" placeholder="Username" required="1" autofocus>
        </div>
        <div style="margin-bottom: 14px;">
          <input class="form-control" type="password" name="pass" placeholder="Password" required="1">
        </div>
        <div style="margin-bottom: 8px;">
          <input class="btn-login pointer" type="submit" name="login" value="Login">
        </div>
        <div class="text-center">
          <?= $error; ?>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
