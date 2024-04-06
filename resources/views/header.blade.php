<style>
    .Menu {
        position: -webkit-sticky;
        position: sticky;
        top: 0px;
        z-index: 200;
    }

    .headers {
        display: flex;
        gap: 10;
        justify-content: space-between;
        padding: 20px;
        align-items: center;
        background: #fafafa;
        background: linear-gradient(to top, #ffffff 5%, #000000 80%);
        background-color: transparent;
        width: 100%;
        /* opacity: 0.5; */
    }

    .companys-ul {
        display: flex;
        gap: 50px;
        align-items: center;
        text-decoration: none;
        list-style: none;
        margin: 20px 20px;
        font-size: 20px;
    }

    .companys-ul a {
        color: white;
        text-decoration: none;
    }

    .myhrd a {
        font-size: 20px;
        color: white
    }

    @media only screen and (max-width: 640px) {

        /* Styles for mobile screens */
        img {
            width: 80px;
        }

        .myhrd a {
            font-size: 15px;
        }
    }

    /* Tablet (portrait) */
    @media only screen and (min-width: 641px) and (max-width: 960px) {

        /* Styles for tablet screens */
        img {
            width: 120px;
        }

        .myhrd a {
            font-size: 17px;
        }
    }

    /* Desktop (landscape) */
    @media only screen and (min-width: 961px) {

        /* Styles for desktop screens */
        img {
            width: 150px;
        }
    }
</style>

<nav class="Menu">
    <div class="headers">
        <div class="logo-img">
            <img src="{{ asset('image/Ds-logo-removebg-preview.png') }}" alt="" style="">
        </div>

        <div class="company d-none d-lg-block">
            <ul class="companys-ul text-white">
                <li><a href="" class="text-white">COMPANY</a></li>
                <li><a href="" class="text-white">GRADING</a></li>
                <li><a href="" class="text-white">EDUCATION</a></li>
                <li><a href="" class="text-white">SERVICES</a></li>
            </ul>
        </div>
        {{-- <div class="myhrd">
            <a href="">MY HRD</a>
        </div> --}}
    </div>
</nav>
