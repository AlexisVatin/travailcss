<?php

function mainViewHelp() {

    <div id="form-main">
  <div id="formdivhelp">
    <form class="form" id="formhelp">

      <p class="problème">
        <input name="problème" type="text" class="" placeholder="Problème" />
      </p>

      <p class="email">
        <input name="email" type="text" class="" placeholder="Email" />
      </p>

      <p class="text">
        <textarea name="text" class="" id="comment" placeholder="Commentaire"></textarea>
      </p>


      <div class="submit">
        <input type="submit" value="SEND"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
    EOT;
}