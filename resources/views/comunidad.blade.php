@extends('header')

@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap");



        body {
            font-family: Montserrat, sans-serif;
            background-color: var(--color-1);
            color: var(--color-2);
        }

        .wrapper {
            max-width: 620px;
            min-width: 300px;
            margin: 0 auto;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        header {
            padding: 0 16px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .account-name {
            font-weight: 800;
            font-size: 21px;
            line-height: 1.1;
            white-space: nowrap;
        }

        .account-name a {
            text-decoration: none;
            color: var(--color-2);
        }


        main {
            margin-top: 5%;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .hero {
            position: relative;
            display: flex;
        }

        .banner {
            width: 100%;
            height: 100%;
        }

        .profile-pic-container {
            max-width: 23%;
            max-height: 23%;
            position: absolute;
            top: 68%;
            left: 6%;
        }

        .twitter-profile-picture {
            width: 100%;
            height: 100%;
            border: 4px solid var(--color-1);
            border-radius: 50%;
            cursor: pointer;
            transition-duration: 0.3s;
        }

        .profile-details {
            padding: 6px 14px 14px 14px;
        }

        nav {
            padding: 6px 0 14px 0;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 8px;
        }

        .frame-cover {
            border: 1px solid rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .profile-botton {
            background-color: var(--color-2);
            border: 1px solid var(--color-2);
            border-radius: 9999px;
            transition-duration: 0.5s;
        }

        .profile-botton a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 21px;
            font-weight: 800;
            color: var(--color-1);
        }

        .profile-botton:hover {
            border: 1px solid var(--color-3);
            background-color: var(--color-3);
        }

        h1 {
            margin-top: 30px;
            font-size: 21px;
            font-weight: 900;
        }

        .account-info {
            margin-block: 15px;
        }

        .info-container-1 {
            margin-block: 20px;
            display: flex;
            gap: 10px;
            align-items: flex-end;
            color: var(--color-3);
            font-size: 14px;
            flex-wrap: wrap;
        }

        .info-container-1 p {
            white-space: nowrap;
            display: flex;
            align-items: flex-end;
            gap: 4px;
        }

        .location {
            letter-spacing: 1.5px;
            font-size: 12px;
        }

        .web-site a {
            text-decoration: none;
            color: var(--color-4);
        }

        .info-icon {
            filter: invert(38%) sepia(9%) saturate(878%) hue-rotate(164deg) brightness(95%) contrast(90%);
            position: relative;
            bottom: 2px;
        }

        .info-follow {
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .info-follow span {
            color: var(--color-3);
        }

        .info-follow p {
            cursor: pointer;
            border-bottom: 1px solid transparent;
            line-height: 0.8;
        }

        .info-follow p:hover {
            border-bottom: 1px solid var(--color-2);
        }

        .tweets-nav {
            display: flex;
            list-style-type: none;
        }

        .tweets-nav li {
            flex: 1;
            text-align: center;
            transition-duration: 0.2s;
            cursor: pointer;
        }

        .tweets-nav li div {
            text-decoration: none;
            padding: 0 16px;
            width: 100%;
            white-space: nowrap;
            color: var(--color-3);
            font-weight: 700;
        }

        .tweets-nav li div p {
            padding: 16px 0;
            position: relative;
            transition-duration: 0.2s;
        }

        .tweets-nav li:hover {
            background-color: var(--color-5);
        }

        .tweets-nav li div p::after {
            content: "";
            display: block;
            width: 100%;
            height: 5px;
            background-color: transparent;
            border-radius: 9999px;
            position: absolute;
            bottom: 0;
            transition-duration: 0.2s;
        }

        .tweets-nav li:focus div p {
            color: var(--color-2);
        }

        .tweets-nav li:focus div p::after {
            background-color: var(--color-6);
        }

        @media only screen and (max-width: 520px) {
            .profile-pic-container {
                max-width: 28%;
                max-height: 28%;
            }

            h1 {
                margin-top: 40px;
            }
        }

        @media only screen and (max-width: 420px) {
            .account-name {
                font-size: 18px;
            }

            small {
                font-size: 12px;
            }

            .profile-pic-container {
                max-width: 28%;
                max-height: 28%;
            }

            h1 {
                margin-top: 20px;
            }

            .tweets-nav {
                font-size: 15px;
            }

            .tweets-nav li div {
                padding: 0 10px;
            }
        }

        @media only screen and (max-width: 320px) {
            .account-name {
                font-size: 16px;
            }

            small {
                font-size: 11px;
            }

            .profile-pic-container {
                max-width: 28%;
                max-height: 28%;
            }

            h1 {
                margin-top: 15px;
            }

            .tweets-nav {
                font-size: 14px;
            }

            .tweets-nav li div {
                padding: 0 8px;
            }
        }

        .codepen-footer {
            font-family: "Patrick Hand", cursive;
            font-size: 17px;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 99;
            background-color: #232323;
            color: #ffffff;
            text-align: center;
            height: 38px;
            font-size: 21px;
            display: flex;
            justify-content: space-between;
            padding: 6px 20px;
        }

        .codepen-footer a {
            color: #ee7344;
            text-decoration: none;
        }
    </style>

    <body>

        <div class="wrapper">
            <main>
                <section class="hero">
                    <img src="https://cdn.britannica.com/67/19367-050-885866B4/Valley-Taurus-Mountains-Turkey.jpg" alt="Fondo perfil" width="680"
                        height="220" class="banner">
                    <div class="profile-pic-container">
                        <img src="https://previews.123rf.com/images/pandavector/pandavector1704/pandavector170406117/76645972-hombre-con-icono-de-barba-plana-%C3%ADcono-de-avatar-%C3%BAnico.jpg" alt="Perfil"
                            width="135" height="135" >
                    </div>
                </section>
                <section class="profile-details">
                    <nav>
                    </nav>
                    <div class="profile-info">
                        <h1>Tan Gravam</h1>
                        <div class="account-info">
                            <p>🐝 Web Design & Development 🔥 Follow For: Daily Tasks, Challenges, Tips & Tricks</p>
                        </div>
                    </div>
                </section>

            </main>
        </div>

    </body>
    <footer>
        @include('footer')
    </footer>
@endsection
