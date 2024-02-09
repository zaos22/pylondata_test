<footer class="container-content">
    <div class="content-footer flex-justify-center">
        <div>
            <h1 class="text-start title-text text-blue">PYLON</h1>
        </div>
        <div>
            <p class="text-center text-size text-green">@yield('pag')</p>
        </div>
        <p class="footer_copyright">&copy; PylonData Test</p>
    </div>
</footer>

<style>
        .title-text {
            font-family: 'Protest Guerrilla', sans-serif;
            font-size: 5rem;
            color: white;
        }

        .container-content {
            width: min(95%, 120rem);
            margin: 0 auto;
        }

        .center-content {
            width: min(95%, 80rem);
        }

        .text-center {
            text-align: center;
        }

        .text-end {
            text-align: end;
        }

        .flex-justify-start {
            display: flex;
            justify-content: start;
            align-items: center;
            align-content: center;
        }

        .flex-justify-end {
            display: flex;
            justify-content: end;
            align-items: center;
            align-content: center;
        }

        .flex-justify-center {
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
        }

        .text-blue {
            color: #2571ff;
        }

        .text-green {
            color: #52ffba;
        }

        .bold {
            font-weight: 700;
        }

        .between {
            display: flex;
            justify-content: space-between;
        }

        .text-start {
            text-align: start;
        }

        .text-up {
            text-transform: uppercase;
        }

        .content-footer {
            display: flex;
            justify-content: space-between;
        }

        .footer_copyright {
            text-align: center;
            font-size: 1.8rem;
            margin: 2rem 0 0;
            margin-bottom: 1rem;
        }

        .text-size{
            font-size: 2.5rem;
        }
</style>
