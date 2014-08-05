<div class="content header clearfix">
    <div class="col-3">
        <a class="logo" href="{{ URL::to('/') }}">
            {{ HTML::image('assets/img/logo.png')}}
        </a>
    </div>
    <div class="col-7 right">
        <form id="login-form" method="post">
            <div class="half">
                <label>Nickname</label>
                <input id="login-username" class="required" type="text" name="username">
                <a class="underline" href="http://linu-ks.com/flirt/passwort-vergessen">Passwort vergessen?</a>
            </div>
            <div class="half right">
                <label>Passwort</label>
                <input id="login-password" class="required" type="text" name="password">
                <input class="right" name="login" type="submit" value="Anmelden">
            </div>
        </form>

    </div>
</div>