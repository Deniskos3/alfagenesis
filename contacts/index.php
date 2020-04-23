<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>AlfaGenesis</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="../img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
    <meta name="theme-color" content="#000">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.css">
</head>

<body>


<div id="app-contacts">
    <div class="hidden">
        <div id="modal-police" class="modal-police-wrapper">
            <div class="modal-block-police">
                <div id="modal-police-wrapper">
                    <a href="" class="cross" onclick="return false;">
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10 fa-2x callback-form-cross"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z" class=""></path></svg>
                    </a>
                    <h2>Политика  конфиденциальности</h2>
                    <p>1. <span>Определение терминов</span></p>
                    <p>1.1 В настроящей Политике конфиденциальности используются следующие термины:</p>
                    <p>1.1.1 «Администрация Сайта (далее – Администрация сайта) » – уполномоченные сотрудники на управления сайтом, действующие от имени Альфа Генезис, которые организуют и (или) осуществляют обработку персональных данных, а также определяют цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.</p>
                    <p>1.1.2. «Персональные данные» - любая информация, относящаяся к прямо или косвенно определенному или определяемому физическому лицу (субъекту персональных данных).</p>
                    <p>1.1.2. «Персональные данные» - любая информация, относящаяся к прямо или косвенно определенному или</p>
                </div>
            </div>
        </div>
    </div>
    <div id="modal">
        <div class="hidden">
            <form  id="callback" class="callback-form forms" enctype="multipart/form-data">
                <header>Обсудим проект?</header>
                <!-- скрытые кнопки показывающие с какой стр был произведен клик -->
                <input id="strsite" name="strsite" type="hidden" value="контакты">
                <input id="butstrsite" name="butstrsite" type="hidden" value="модального окна &#8221;сделать заказ&#8221; ">
                <!--  -->
                <p>Оставьте заявку и мы перезвоним вам<br>в течение <span>10 минут</span></p>
                <div class="callback-form-block">
                    <label class="callback_phone_label" for="callback_phone">Введите ваш номер и мы перезвоним</label>
                    <input id="callback_phone" type="tel" placeholder="+7" name="phone" required>
                    <span class="hidden validate_flag">
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-check fa-w-14 fa-2x"><path fill="currentColor" d="M413.505 91.951L133.49 371.966l-98.995-98.995c-4.686-4.686-12.284-4.686-16.971 0L6.211 284.284c-4.686 4.686-4.686 12.284 0 16.971l118.794 118.794c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-11.314-11.314c-4.686-4.686-12.284-4.686-16.97 0z" class=""></path></svg>
                    </span>
                </div>
                <div class="callback-form-block callback-form-block-text">
                    <input id="callback_name" type="text" placeholder="Введите Ваше имя" name="name" required>

                    <span class="hidden validate_flag">
							<svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-check fa-w-14 fa-2x"><path fill="currentColor" d="M413.505 91.951L133.49 371.966l-98.995-98.995c-4.686-4.686-12.284-4.686-16.971 0L6.211 284.284c-4.686 4.686-4.686 12.284 0 16.971l118.794 118.794c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-11.314-11.314c-4.686-4.686-12.284-4.686-16.97 0z" class=""></path></svg>
						</span>
                </div>
                <div class="callback-form-block callback-form-block-textarea">
                    <textarea name="callback_comment" id="comment" cols="30" rows="10" placeholder="Введите комментарий                                                             (если необходимо)"></textarea>
                    <span class="hidden validate_flag">
							<svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-check fa-w-14 fa-2x"><path fill="currentColor" d="M413.505 91.951L133.49 371.966l-98.995-98.995c-4.686-4.686-12.284-4.686-16.971 0L6.211 284.284c-4.686 4.686-4.686 12.284 0 16.971l118.794 118.794c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-11.314-11.314c-4.686-4.686-12.284-4.686-16.97 0z" class=""></path></svg>
						</span>
                </div>
                <div class="callback-form-block-file">
                    <label class="file-area">
							<span class="file-wrap">
								<svg width="27" height="29" viewBox="0 0 27 29" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M24.7433 17.8735L22.5985 15.7286L12.9472 6.07772C11.1684 4.31232 8.2972 4.31765 6.52514 6.08971C4.75307 7.86178 4.74774 10.733 6.51315 12.5117L16.1641 22.1655C16.5588 22.5605 17.1991 22.5605 17.594 22.1655C17.9887 21.7706 17.9887 21.1305 17.594 20.7356L7.9431 11.0818C6.95606 10.0947 6.95606 8.49473 7.9431 7.50768C8.93015 6.52063 10.5302 6.52063 11.5172 7.50768L21.171 17.1586L23.3158 19.3032C25.0928 21.0808 25.0921 23.9622 23.3147 25.739C21.5371 27.5157 18.6559 27.5153 16.8789 25.7376L15.092 23.95L5.08342 13.9415L4.36833 13.2266C1.86896 10.6491 1.90071 6.54283 4.43937 4.00395C6.97826 1.46529 11.0845 1.43354 13.662 3.93291L24.3855 14.6566C24.641 14.9119 25.0133 15.0115 25.3621 14.9181C25.7111 14.8246 25.9837 14.5522 26.0772 14.2032C26.1706 13.8542 26.0707 13.4821 25.8154 13.2266L15.092 2.50317C11.7337 -0.839823 6.30313 -0.833607 2.95258 2.51716C-0.398182 5.8677 -0.404398 11.2982 2.9386 14.6566L13.662 25.38L15.4516 27.1676C18.0325 29.6465 22.1225 29.6052 24.6525 27.0744C27.1828 24.5437 27.2229 20.4536 24.7433 17.8735Z" fill="black"/>
							</svg>
							<span class="file-area-description">
								<span class="file-area-description-large">Добавить файл</span>
								<span class="file-area-description-small">Вы можете загрузить до 5 Мб</span>
							</span>
							</span>
                        <input name="myfile[]" type="file" accept="image/*,image/jpeg">
                    </label>
                </div>
                <div class="form-control-btn">
                    <input type="submit" id="form-send" class="btn-form-callback" value="Сделать заказ">
                </div>
                <p class="police-conf">Оформляя заявку, я соглашаюсь с <a href="" id="opened-police" onclick="return false;">политикой конфидициальности</a></p>
            </form>
        </div>
    </div>
    <div class="hidden">
        <div class="modal-template">
            <div class="modal-block-success">
                <a href="" class="cross" onclick="return false;">
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10 fa-2x callback-form-cross"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z" class=""></path></svg>
                </a>
                <div class="ellipse-success">!</div>
                <h2>Спасибо за заявку!</h2>
                <p>Наш менеджер свяжется с вами в течение <span>10 минут!</span>  Если у вас возник срочный вопрос, перезвоните нам прямо сейчас по номеру <span>8 (800) 000 00-00</span></p>
            </div>
        </div>
    </div>
    <div class="screen-contacts">
        <div class="screen-page-contacts">
            <div class="container-custom">
                <div class="flex-wrapper-screen">
                    <div class="header header-colorize">
                        <div class="logo">
                            <a href="/">a</a>
                        </div>
                        <div class="company-name">alfa genesis</div>
                        <nav>
                            <ul class="menu">
                                <li><a href="/projects">Проекты</a></li>
                                <li><a href="/work">Как рaботаем</a></li>
                                <li><a href="/services">Услуги</a></li>
                                <li><a href="/contacts" class="active-menu-item">Контакты</a></li>
                            </ul>
                        </nav>
                        <div class="header-mobile">
                            <div class="wrapper-hamburger">
                                <div class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-left-column">
                        <div class="logo">
                            <a href="/">a</a>
                        </div>
                        <nav>
                            <ul class="menu">
                                <li><a href="/projects">
                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M5.54719 24.3498C5.33208 24.7788 5.41586 25.2975 5.75477 25.6367L6.02701 25.9089C6.81355 24.9769 7.73027 23.9653 8.8421 22.8538C8.92067 22.7752 9.00156 22.7372 9.08042 22.6648L7.32903 20.9131C6.31084 22.7546 5.71709 24.0129 5.54719 24.3498Z" fill="white"/>
                                                <path d="M15.1398 29.1514C14.0253 30.2658 13.0164 31.1843 12.0895 31.9714L12.4583 32.3402C12.8004 32.6823 13.324 32.7646 13.7545 32.5431C14.3312 32.246 15.238 31.8192 17.1631 30.7471L15.3291 28.9131C15.2566 28.9922 15.2186 29.0728 15.1398 29.1514Z" fill="white"/>
                                                <path d="M14.5463 23.4476C13.7418 22.6431 11.4793 23.3644 10.4165 24.4269C6.86093 27.9825 5.25508 30.5033 4.53406 31.9917C4.32735 32.4182 4.41345 32.9288 4.7486 33.2639C5.08432 33.5999 5.59573 33.6852 6.02249 33.4784C7.47758 32.7719 9.96768 31.1736 13.5656 27.576C14.7342 26.4068 15.3109 24.2124 14.5472 23.4485L14.5463 23.4476Z" fill="white"/>
                                                <path d="M3.47501 14.8227L0.32622 17.9715C-0.0297983 18.3276 -0.102857 18.8787 0.14937 19.3153C0.39551 19.7461 0.910982 19.9656 1.40152 19.8343C3.10333 19.3779 4.60076 19.1851 5.60909 19.4437C7.0436 16.8933 8.58508 14.5456 10.2176 12.4129C9.27335 11.8076 6.15297 12.1448 3.47501 14.8227Z" fill="white"/>
                                                <path d="M18.8437 37.8802C19.2725 38.097 19.7917 38.0132 20.1312 37.6734L23.2803 34.5247C25.7182 32.0862 26.1473 28.94 25.5941 27.9424C23.2156 29.7349 20.8061 31.2486 18.5581 32.5158C18.7132 33.3917 18.61 34.2414 18.2433 36.7231C18.1716 37.2035 18.4198 37.6682 18.8437 37.8802Z" fill="white"/>
                                                <path d="M22.1024 11.1672C20.8004 12.4695 20.8004 14.5879 22.1024 15.8902C23.4047 17.1925 25.5234 17.1925 26.8257 15.8902C28.128 14.5879 28.128 12.4695 26.8257 11.1672C25.5234 9.86485 23.4047 9.86485 22.1024 11.1672Z" fill="white"/>
                                                <path d="M37.9345 1.08593C37.8945 0.53538 37.4562 0.100215 36.9074 0.0590467C34.1731 -0.146794 31.4497 0.189509 28.7801 1.00592C28.981 2.83993 29.9296 4.8247 31.5491 6.44418C33.188 8.08279 35.2267 9.03111 37.0935 9.20854C37.8125 6.68887 38.1534 3.99032 37.9345 1.08593Z" fill="white"/>
                                                <path d="M29.9748 8.0191C28.1222 6.16653 26.991 3.94461 26.628 1.78125C19.9428 4.52299 13.5432 10.5104 8.48615 18.9214L10.9986 21.4339C12.7152 20.7369 14.7991 20.5528 16.1208 21.8742C17.4443 23.198 17.2567 25.2811 16.56 26.9953L19.1551 29.5904C25.6266 25.6901 33.161 19.5453 36.3649 11.37C34.1487 11.0351 31.8575 9.90182 29.9748 8.0191ZM28.4 17.4655C26.2299 19.6355 22.6985 19.6355 20.5281 17.4655C18.3578 15.2952 18.3578 11.7634 20.5281 9.59335C22.6985 7.42332 26.2299 7.42332 28.4 9.59335C30.5703 11.7637 30.5703 15.2952 28.4 17.4655Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="38" height="38" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p>Проекты</p>
                                    </a></li>
                                <li><a href="/work">
                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M5.93758 8.70833C5.06358 8.70833 4.35425 7.999 4.35425 7.125V1.58333C4.35425 0.709333 5.06358 0 5.93758 0C6.81158 0 7.52091 0.709333 7.52091 1.58333V7.125C7.52091 7.999 6.81158 8.70833 5.93758 8.70833Z" fill="white"/>
                                                <path d="M13.4583 8.70833C12.5843 8.70833 11.875 7.999 11.875 7.125V1.58333C11.875 0.709333 12.5843 0 13.4583 0C14.3323 0 15.0417 0.709333 15.0417 1.58333V7.125C15.0417 7.999 14.3323 8.70833 13.4583 8.70833Z" fill="white"/>
                                                <path d="M20.9791 8.70833C20.1051 8.70833 19.3958 7.999 19.3958 7.125V1.58333C19.3958 0.709333 20.1051 0 20.9791 0C21.8531 0 22.5624 0.709333 22.5624 1.58333V7.125C22.5624 7.999 21.8531 8.70833 20.9791 8.70833Z" fill="white"/>
                                                <path d="M22.5625 3.5625H4.35417C1.9475 3.5625 0 5.51 0 7.91667V28.8958C0 31.3025 1.9475 33.25 4.35417 33.25H16.0392L16.3875 31.3025C16.5458 30.4158 16.9575 29.6242 17.5908 28.975L26.9167 19.665V7.91667C26.9167 5.51 24.9692 3.5625 22.5625 3.5625ZM12.6667 11.0833C13.5375 11.0833 14.25 11.7958 14.25 12.6667C14.25 13.5375 13.5375 14.25 12.6667 14.25H6.33333C5.4625 14.25 4.75 13.5375 4.75 12.6667C4.75 11.7958 5.4625 11.0833 6.33333 11.0833H12.6667ZM17.4167 20.5833H6.33333C5.4625 20.5833 4.75 19.8708 4.75 19C4.75 18.1292 5.4625 17.4167 6.33333 17.4167H17.4167C18.2875 17.4167 19 18.1292 19 19C19 19.8708 18.2875 20.5833 17.4167 20.5833Z" fill="white"/>
                                                <path d="M19.8361 38.0005C19.5241 38.0005 19.2201 37.877 18.9969 37.6521C18.723 37.3782 18.5995 36.9887 18.6676 36.6055L19.5067 31.8476C19.5479 31.6085 19.6651 31.3869 19.8361 31.2143L31.5923 19.4596C33.0363 18.0124 34.455 18.4035 35.2308 19.1794L37.1894 21.138C38.2708 22.2178 38.2708 23.9753 37.1894 25.0567L25.4331 36.813C25.2621 36.9855 25.0405 37.1011 24.7998 37.1423L20.0419 37.9815C19.9738 37.9941 19.9041 38.0005 19.8361 38.0005ZM24.594 35.9738H24.6098H24.594Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="38" height="38" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p>Как рaботаем</p>
                                    </a></li>
                                <li><a href="/services">
                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M12.3203 24.5667H32.4339C32.932 24.5667 33.3689 24.2374 33.5037 23.759L37.9571 8.17276C38.0528 7.83675 37.9872 7.4758 37.7765 7.19661C37.5654 6.91829 37.2372 6.75391 36.887 6.75391H9.7502L8.95438 3.17285C8.84131 2.66289 8.38904 2.30078 7.86719 2.30078H1.11328C0.498077 2.30078 0 2.79886 0 3.41406C0 4.02956 0.498077 4.52734 1.11328 4.52734H6.97366L10.9939 22.6182C9.81108 23.1325 8.98047 24.3098 8.98047 25.68C8.98047 27.5215 10.4788 29.0198 12.3203 29.0198H32.4339C33.0494 29.0198 33.5472 28.522 33.5472 27.9065C33.5472 27.2913 33.0494 26.7933 32.4339 26.7933H12.3203C11.7071 26.7933 11.207 26.2943 11.207 25.68C11.207 25.0656 11.7071 24.5667 12.3203 24.5667Z" fill="white"/>
                                                <path d="M11.2069 32.3604C11.2069 34.2022 12.7052 35.7002 14.547 35.7002C16.3886 35.7002 17.8869 34.2022 17.8869 32.3604C17.8869 30.5188 16.3886 29.0205 14.547 29.0205C12.7052 29.0205 11.2069 30.5188 11.2069 32.3604Z" fill="white"/>
                                                <path d="M26.8674 32.3604C26.8674 34.2022 28.3657 35.7002 30.2072 35.7002C32.0491 35.7002 33.5471 34.2022 33.5471 32.3604C33.5471 30.5188 32.0491 29.0205 30.2072 29.0205C28.3657 29.0205 26.8674 30.5188 26.8674 32.3604Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="38" height="38" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p>Услуги</p>
                                    </a></li>
                                <li><a href="/contacts">
                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M28.9444 31.9557L22.5386 27.6851C22.2521 27.496 21.8683 27.5582 21.6563 27.8283L19.7911 30.2263C19.1866 31.0141 18.0956 31.2389 17.2289 30.7543L16.8841 30.5649C15.64 29.8862 14.0911 29.0418 11.0165 25.9672C7.94185 22.8926 7.09682 21.3437 6.41875 20.0989L6.22871 19.7541C5.74417 18.8876 5.96903 17.7968 6.75675 17.1926L9.15405 15.3268C9.42441 15.1149 9.48677 14.7309 9.29725 14.4444L5.02735 8.03791C4.83315 7.74721 4.44512 7.65976 4.14498 7.83904L1.4647 9.44624C0.889666 9.78186 0.466744 10.3269 0.284421 10.9673C-0.595868 14.1729 0.144635 19.786 8.6701 28.3122C17.1956 36.8384 22.8074 37.5802 26.0157 36.6992C26.6562 36.5166 27.2012 36.0935 27.5367 35.5182L29.1432 32.8379C29.323 32.538 29.2354 32.1497 28.9444 31.9557Z" fill="white"/>
                                                <path d="M37.8919 1.12569C37.8217 1.05546 37.7261 1.01649 37.6267 1.0176H9.18803C9.0887 1.01649 8.99309 1.05546 8.92286 1.12569C8.85263 1.19592 8.81366 1.29153 8.81477 1.39086V11.2718L10.4274 13.6908C11.009 14.5696 10.8179 15.7477 9.98829 16.3976L7.59307 18.2634C7.33666 18.4579 7.26213 18.8113 7.41795 19.0928L7.61341 19.4492C8.23662 20.6344 8.9968 21.7425 9.87835 22.7505H37.6267C37.8304 22.752 37.997 22.589 38.0001 22.3854V1.39086C38.0012 1.29153 37.9622 1.19592 37.8919 1.12569ZM18.6081 13.4695V13.4661L11.6553 20.9151C11.3996 21.1893 10.9701 21.2043 10.6959 20.9487C10.4217 20.6931 10.4067 20.2635 10.6623 19.9894L17.6151 12.5438C17.8708 12.2695 18.3003 12.2545 18.5745 12.5101C18.8487 12.7658 18.8638 13.1953 18.6081 13.4695ZM23.4074 12.9347C22.9182 12.9369 22.4417 12.7797 22.0499 12.4867L10.7057 3.88452C10.407 3.65698 10.3492 3.23035 10.5768 2.93155C10.8043 2.63283 11.2309 2.57507 11.5297 2.8026L22.8693 11.4048C23.1902 11.638 23.6248 11.638 23.9457 11.4048L35.2885 2.8026C35.5873 2.57603 36.0132 2.63453 36.2398 2.93326C36.4664 3.23198 36.4079 3.65787 36.1091 3.88452L24.7649 12.4867C24.3731 12.7797 23.8966 12.9369 23.4074 12.9347ZM36.1621 20.9484C36.0305 21.0714 35.8553 21.1369 35.6753 21.1307C35.4953 21.1245 35.3251 21.047 35.2024 20.9152L28.2502 13.4661C28.0139 13.1893 28.0381 12.7754 28.3049 12.528C28.5717 12.2805 28.9861 12.2875 29.2445 12.5438L36.1953 19.9894C36.4508 20.2634 36.436 20.6927 36.1621 20.9484Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="38" height="38" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p>Контакты</p>
                                    </a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="info-main">
                        <div class="container-content-contacts">
                            <div class="content-contacts-left">
                                <h1>Контакты</h1>
                                <div class="content-contacts-address">
                                    <header>Адрес</header>
                                    <address>428000, Россия, Чувашская Респубика, <br>г. Чебоксары, БЦ “Республика”,  ул. Ярославская 27, оф. 602</address>
                                    <span>Фактический и юридический адрес</span>
                                    <a href="#">Показать на карте</a>
                                </div>
                                <div class="content-contacts-info">
                                    <header>Контактная информация</header>
                                    <div class="contacts-info_wrap">
                                        <div class="contacts-left_column">
                                            <p>8 800 600 00 21</p>
                                            <span>Звонок по РФ бесплатный</span>
                                            <a href="#" class="contacts-call-mobile">Заказать звонок</a>
                                        </div>
                                        <div class="contacts-right_column">
                                            <p>info@alfagenesis.ru</p>
                                            <span>Для Ваших брифов и заявок</span>
                                        </div>
                                    </div>
                                    <a href="#callback" class="contacts-call-desk">Заказать звонок</a>
                                </div>
                                <div class="content-contacts-question">
                                    <p>Обсудим ваш проект?</p>
                                    <div class="form-control-btn form-control-btn-fit">
                                        <a class="btn-form-callback wrapper-callback-form-open" href="#callback">Отправить заявку</a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-contacts-right">
                                <h1 class="contacts-header-mobile">Контакты</h1>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="footer footer-colorize">
                        <div class="footer-block footer-name">
                            <p>ООО “Альфа Генезис”</p>
                            <span>ИНН 2130175319 ОГРН 1162130061840</span>
                        </div>
                        <div class="footer-block footer-phone">
                            <p>Поддержка по РФ</p>
                            <p>8 800 600 00 21</p>
                        </div>
                        <div class="footer-block footer-email">
                            <p>Почта:</p>
                            <p>info@alfagenesis.ru</p>
                        </div>
                        <div class="footer-block footer-social">
                            <p>Мы на связи<br>в соц.сетях:</p>
                            <div class="social">
                                <a href="https://vk.com/alfa_genesis" target="_blank">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="vk" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-vk fa-w-18 fa-7x"><path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z" class=""></path></svg>
                                </a>
                                <a href="https://www.facebook.com/alfa.genezis" target="_blank">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10 fa-7x"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path></svg>
                                </a>
                                <a href="https://www.instagram.com/alfa_genesis/ " target="_blank">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14 fa-2x"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-callback-form">
                <a href="#callback" class="wrapper-callback-form-open">
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-plus fa-w-12 fa-2x"><path fill="currentColor" d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" class=""></path></svg>
                </a>
        </div>
        <div class="callback-chat">
                <a href="#">
                    <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.22231 25.5334H2.1675L3.62046 24.0804C4.40388 23.297 4.8931 22.278 5.02463 21.1727C1.66971 18.971 0 15.7815 0 12.4378C0 6.26895 5.66971 0 14.5491 0C23.9559 0 29 5.76861 29 11.8973C29 18.0664 23.9026 23.8311 14.5491 23.8311C12.9106 23.8311 11.2009 23.6124 9.67436 23.2111C8.22935 24.6932 6.27145 25.5334 4.22231 25.5334Z" fill="white"/>
                    </svg>
                </a>

        </div>
        <!-- <div class="menu-right" id="menu-right">
            <div class="wrapper-callback-form">
                <a href="#callback" class="wrapper-callback-form-open">
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-plus fa-w-12 fa-2x"><path fill="currentColor" d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" class=""></path></svg>
                </a>
            </div>
            <div class="control-arrow">
                <svg width="9" height="27" viewBox="0 0 9 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.24004 2.13203C8.5889 1.38064 8.26258 0.488706 7.51119 0.139846C6.7598 -0.209014 5.86787 0.117302 5.51901 0.868692L0.13988 12.4545C0.00853864 12.7374 -0.0271021 13.0402 0.0196108 13.3265C-0.0111109 13.5977 0.0317796 13.8805 0.158932 14.1446L5.49995 25.2375C5.85933 25.9839 6.75576 26.2977 7.50217 25.9383C8.24859 25.5789 8.56234 24.6825 8.20295 23.9361L3.06815 13.2715L8.24004 2.13203Z" fill="#C5C5C5" fill-opacity="0.74"/>
                </svg>
                <svg class="hidden" width="9" height="27" viewBox="0 0 9 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.139846 2.13203C-0.209014 1.38064 0.117302 0.488706 0.868693 0.139846C1.62008 -0.209014 2.51201 0.117302 2.86087 0.868693L8.43046 12.8647C8.55996 13.1437 8.59642 13.4419 8.55263 13.7246C8.57964 13.9906 8.53591 14.267 8.41145 14.5255L2.87998 26.0139C2.5206 26.7604 1.62417 27.0741 0.877757 26.7147C0.131343 26.3553 -0.182407 25.4589 0.176978 24.7125L5.49528 13.6668L0.139846 2.13203Z" fill="#C5C5C5" fill-opacity="0.74"/>
                </svg>
            </div>
            <div class="callback-chat">
                <a href="#">
                    <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.22231 25.5334H2.1675L3.62046 24.0804C4.40388 23.297 4.8931 22.278 5.02463 21.1727C1.66971 18.971 0 15.7815 0 12.4378C0 6.26895 5.66971 0 14.5491 0C23.9559 0 29 5.76861 29 11.8973C29 18.0664 23.9026 23.8311 14.5491 23.8311C12.9106 23.8311 11.2009 23.6124 9.67436 23.2111C8.22935 24.6932 6.27145 25.5334 4.22231 25.5334Z" fill="white"/>
                    </svg>
                </a>

            </div>
            <div class="container-menu-right">
                <h2>Проекты студии</h2>
                <div class="project-navigate">
                    <ul>
                        <li><a class="active-project-type" href="">Все</a></li>
                        <li><a href="">Лендинги</a></li>
                        <li><a href="">Сервисы</a></li>
                        <li><a href="">Магазин</a></li>
                    </ul>
                </div>
                <div class="container-scroll">
                <div class="js-page-scroll js-page-scroll-tow">
                <div class="js-page-scroll-main card-projects-navigate">
                    <a href="/project_1" class="card-nav-link">
                        <div class="card-nav themes-purple">
                            <div class="card-project-nav-header">
                                <h3>БФ "Помогите детям"</h3>
                                <p>Разработка сервис благотворительного фонда для помощи детям онлайн, с персональным кабинетом</p>
                            </div>
                            <div class="card-project-nav-image">
                                <img src="../img/icons/projects/help_child.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a href="/project_2" class="card-nav-link">
                        <div class="card-nav themes-yellow">
                            <div class="card-project-nav-header">
                                <h3>COOL PAY</h3>
                                <p>Лучший эквайринг для </br>бизнеса</p>
                            </div>
                            <div class="card-project-nav-image">
                                <img src="../img/icons/projects/logo1.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a href="/project_3" class="card-nav-link">
                        <div class="card-nav themes-pink">
                            <div class="card-project-nav-header">
                                <h3 class="color-dark">Realtransit</h3>
                                <p class="color-dark">Доставка грузов из Китая <br/>в Россию</p>
                            </div>
                            <div class="card-project-nav-image">
                                <img src="../img/icons/projects/123.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a href="#callback" class="card-nav-link wrapper-callback-form-open">
                        <div class="card-nav themes-transparent card-nav-open__modal">
                            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M87.4286 39.4286H58.2857C57.339 39.4286 56.5714 38.661 56.5714 37.7143V8.57143C56.5714 3.83789 52.7335 0 48 0C43.2665 0 39.4286 3.83789 39.4286 8.57143V37.7143C39.4286 38.661 38.661 39.4286 37.7143 39.4286H8.57143C3.83789 39.4286 0 43.2665 0 48C0 52.7335 3.83789 56.5714 8.57143 56.5714H37.7143C38.661 56.5714 39.4286 57.339 39.4286 58.2857V87.4286C39.4286 92.1621 43.2665 96 48 96C52.7335 96 56.5714 92.1621 56.5714 87.4286V58.2857C56.5714 57.339 57.339 56.5714 58.2857 56.5714H87.4286C92.1621 56.5714 96 52.7335 96 48C96 43.2665 92.1621 39.4286 87.4286 39.4286Z" fill="#E2E2E2"/>
                            </svg>
                        </div>
                    </a>
                </div>
                </div>
                </div>
  
            </div>
        </div> -->
    </div>
</div>

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 56.142267, lng: 47.2491123 },
            zoom: 14,
            scrollwheel: true,
            draggable: true,
            zoomControl: true,
            disableDoubleClickZoom: true,
            disableDefaultUI: true,
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": "-100"
                        }
                    ]
                },
                {
                    "featureType": "administrative.province",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 65
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": "50"
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": "-100"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "all",
                    "stylers": [
                        {
                            "lightness": "30"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "all",
                    "stylers": [
                        {
                            "lightness": "40"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "hue": "#ffff00"
                        },
                        {
                            "lightness": -5
                        },
                        {
                            "saturation": -97
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "lightness": -25
                        },
                        {
                            "saturation": -100
                        }
                    ]
                }
            ]
        });

        $(window).on('load resize', function() {
            if ($(window).width() < 640) {
                var marker = new google.maps.Marker({
                    position: { lat: 56.143225, lng: 47.252107 },
                    map: map,
                    title: 'Альфа Генезис',
                    icon: '../img/icons/marker_small.png'
                });
            } else {
                var marker = new google.maps.Marker({
                    position: { lat: 56.143225, lng: 47.252107 },
                    map: map,
                    title: 'Альфа Генезис',
                    icon: '../img/icons/marker.svg'
                });
            }
        });

    }
</script>


<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu4vvCWQea9O8I3DiaxzDKOf3m-PB1qak&callback=initMap" async defer></script>
<script src="../js/scripts.min.js"></script>
<script src="//code.jivosite.com/widget/FejpRzp385" async></script>
<script src="../mail/js/mail.js"></script>

</body>
</html>
