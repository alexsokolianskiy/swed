<?php
    $language = 'English';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="rec-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans("all.recommendation") }}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="rec-dropdown">
                        <a class="dropdown-item" href="#">{{ trans("all.recommendation_over") }}</a>
                        <a class="dropdown-item" href="#">{{ trans("all.recommendation_select") }}</a>
                      </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="platform-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans("all.platforms") }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="platform-dropdown">
                        <a class="dropdown-item" href="#">Arduino</a>
                        <a class="dropdown-item" href="#">Arduino IDE</a>
                        <a class="dropdown-item" href="#">Raspberry PI</a>
                        <a class="dropdown-item" href="#index.php/front/oh">OpenHAB</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="experiments-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans("all.experiments") }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="experiments-dropdown">
                        <a class="dropdown-item" href="#index.php/experiments/1">{{ trans("all.distance") }}</a>
                        <a class="dropdown-item" href="#index.php/experiments/2">{{ trans("all.servo") }}</a>
                        <a class="dropdown-item" href="#index.php/experiments/3">{{ trans("all.led") }}</a>
                        <a class="dropdown-item" href="#index.php/experiments/4">{{ trans("all.display") }}</a>
                        <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#basicModalInfo">{{ trans("all.infoTitle") }}</a>
                        <!-- <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li> -->
                        </div>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="oh-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans("all.sh") }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="oh-dropdown">
                        <a class="dropdown-item" href="#index.php/iot/">{{ trans("all.sh") }}</a>
                        <a class="dropdown-item" href="#index.php/virtual/view">{{ trans("all.virtual_model") }}</a>
                        <a class="dropdown-item" href="#index.php/iot/solarexp">{{ trans("all.solar_station") }}</a>
                        <a class="dropdown-item" href="#index.php/iot/illumexp">{{ trans("all.illumination") }}</a>
                        <a class="dropdown-item" href="#index.php/iot/climatexp">{{ trans("all.climate") }}</a>
                        <a class="dropdown-item" href="#index.php/iot/accessexp">{{ trans("all.access") }}</a>
                        <a class="dropdown-item" href="#index.php/iot/safetyexp">{{ trans("all.security") }}</a>
                        <a class="dropdown-item" href="#index.php/iot/zoneexp">{{ trans("all.zone") }}</a>
                        <a class="dropdown-item" href="#index.php/iot/presenceexp">{{ trans("all.presence") }}</a>
                        <a class="dropdown-item" href="#index.php/iot/ventilationexp">{{ trans("all.ventilation") }}</a>
                        <a class="dropdown-item" href="#index.php/iot/lightexp">{{ trans("all.lighting") }}</a>
                        <a class="dropdown-item" href="#index.php/iot/wireless">{{ trans("all.wireless") }}</a>
                    </div>
                </li>
                {{-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">MyHome<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#index.php/front/myhome">MyHome</a></li>
                    </ul>
                </li> --}}
                <!-- <li><a href="#index.php/front/API">RELDES API</a></li> -->
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="lang-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if($language == "" || $language == "english")echo 'English'; else echo 'Українська'?> <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="lang-dropdown">
                        <a class="dropdown-item" href="#index.php/front/setLanguage/english">English</a>
                        <a class="dropdown-item" href="#index.php/front/setLanguage/ukrainian">Українська</a>
                    </div>
                </li>
            </ul>
        </div>
  </nav>
