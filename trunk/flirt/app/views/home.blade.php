@extends('layouts.home')

@section('content')

<div class="top_wrapper">
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
                    <input id="login-username" class="required" type="text" name="login-username" tabindex="1">
                    <a class="underline" href="http://linu-ks.com/flirt/passwort-vergessen">Passwort vergessen?</a>
                </div>
                <div class="half right">
                    <label>Passwort</label>
                    <input id="login-password" class="required" type="password" name="login-password" tabindex="2">
                    <a class="underline" href="http://linu-ks.com/flirt/register">Register</a>
                    <input class="right" name="login-submit" type="submit" value="Anmelden">
                </div>
            </form>
        </div>
    </div><!-- content -->
    <div class="content clearfix">
        <div class="col-8 center slogan">
            <h1>FIND LOVE 18</h1> <h1>heißt Sie herzlich willkommen! Chatten Sie online mit Gleichgesinnten, suchen und bewerten Sie Profile mit Fotos, teilen Sie mit anderen Ihre Gedanken oder verabreden Sie sich mit anderen interessanten Mitgliedern. Melden Sie sich kostenlos an und genießen Sie die Gratismitgliedschaft.</h1>
        </div>
    </div><!-- content -->
</div>

<div class="content clearfix">
    <div class="col-12">
        <div class="table">
            <span class="before"></span><h2 class="title">Gerade Online</h2><span class="after"></span>
        </div>
        <form>
            <div class="mini_form">
                <label>Ich bin:</label>
                <select name="ich_bin">
                    <option value="ein Mann">ein Mann</option>
                    <option value="eine Frau">eine Frau</option>
                </select>
            </div>
            <div class="mini_form">
                <label>Ich suche:</label>
                <select name="ich_suche">
                    <option value="eine Frau">eine Frau</option>
                    <option value="einen Mann">einen Mann</option>
                    <option value="ein Paar">ein Paar</option>
                </select>
            </div>
            <div class="mini_form">
                <label>Alter:</label>
                <select class="such" name="alter">
                    <option value="18-21" selected="selected">18-21</option>
                    <option value="22-25">22-25</option>
                    <option value="26-29">26-29</option>
                    <option value="30-33">30-33</option>
                    <option value="34-37">34-37</option>
                    <option value="38-41">38-41</option>
                    <option value="42-45">42-45</option>
                    <option value="46-50">46-50</option>
                    <option value="51-60">51-60</option>
                </select>
            </div>
            <div class="mini_form">
                <label>Region:</label>
                <select class="such" name="plz">
                    <option value="0xxxx" selected="selected">0xxxx</option>
                    <option value="1xxxx">1xxxx</option>
                    <option value="2xxxx">2xxxx</option>
                    <option value="3xxxx">3xxxx</option>
                    <option value="4xxxx">4xxxx</option>
                    <option value="5xxxx">5xxxx</option>
                    <option value="6xxxx">6xxxx</option>
                    <option value="7xxxx">7xxxx</option>
                    <option value="8xxxx">8xxxx</option>
                    <option value="9xxxx">9xxxx</option>
                </select>
            </div>
            <div class="mini_form">
                <label>Bild:</label>
                <input type="checkbox" name="anzeigen">
                <span>nur mit Bild anzeigen</span>
            </div>
            <div class="mini_form">
                <input type="submit" value="Suche starten">
            </div>
        </form>
        <div class="bx-wrapper" style="max-width: 940px; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 250px;"><ul class="one_five bxslider clearfix" style="width: 1215%; position: relative; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(-940px, 0px, 0px);"><li style="float: left; list-style: none; position: relative; width: 188px;" class="bx-clone">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li><li style="float: left; list-style: none; position: relative; width: 188px;" class="bx-clone">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li><li style="float: left; list-style: none; position: relative; width: 188px;" class="bx-clone">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li><li style="float: left; list-style: none; position: relative; width: 188px;" class="bx-clone">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li><li style="float: left; list-style: none; position: relative; width: 188px;" class="bx-clone">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 188px;" class="bx-clone">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li><li style="float: left; list-style: none; position: relative; width: 188px;" class="bx-clone">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li><li style="float: left; list-style: none; position: relative; width: 188px;" class="bx-clone">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li><li style="float: left; list-style: none; position: relative; width: 188px;" class="bx-clone">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_red"></span>
                        </a>
                    </li><li style="float: left; list-style: none; position: relative; width: 188px;" class="bx-clone">
                        <img src="img/foto.jpg" alt="Foto">
                        <a href="#" class="text_holder">
                            <h2>Sea Devil</h2>
                            <span class="circle light_green"></span>
                        </a>
                    </li></ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
    </div>				
</div>

<div class="content clearfix">
    <div class="col-12">
        <div class="table">
            <span class="before"></span><h2 class="title">Gerade Online</h2><span class="after"></span>
        </div>
    </div>	
    <div class="col-4">
        <button type="button">Alle</button>
        <button type="button">Männer</button>
        <button type="button">Frauen</button>
    </div>	
    <form class="auto_width">
        <div class="col-4">
            <label>Nickname</label>
            <input type="text" name="Nickname">
        </div>	
        <div class="col-4">
            <input type="submit" value="Suche">
        </div>	
    </form>
    <div class="col-12">
        <ul class="one_four_margin clearfix">
            <li>
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li>
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li>
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li style="margin-right: 0px;">
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li>
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li>
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li>
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li style="margin-right: 0px;">
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li>
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li>
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li>
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
            <li style="margin-right: 0px;">
                <img src="img/foto.jpg" alt="Foto">
                <a href="#" class="text_holder">
                    <h2>Sea Devil</h2>
                    <span class="circle light_green"></span>
                </a>
            </li>
        </ul>
    </div>				
</div>

@stop