<header class="header">
    <div class="container-content navigation-bar">
        <h1 class="text-center title-text">PYLON</h1>
        <div class="no-print">
            <div class="between">
                <button class="button" onclick="window.print()">Descargar PDF</button>
                <form action="{{ route('generar.pdf') }}" method="GET">
                    <button class="button" type="submit">Generar DomPDF</button>
                </form>
            </div>
        </div>
    </div>
</header>

<style>
    h1 {
        font-family: 'Protest Guerrilla', sans-serif;
    }

    .title-text {
        font-size: 5rem;
        color: white;
    }

    .navigation-bar {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .container-content {
        width: min(95%, 120rem);
        margin: 0 auto;
    }

    .center-content {
        width: min(95%, 80rem);
    }

    .box-shadow {
        background-image: linear-gradient(to bottom left, #52ffba 50%, #2571ff 50%);
        box-shadow: 0 0 2rem rgba(0, 0, 0, 0.5);
        padding: 2rem 0;
        font-family: 'Protest Guerrilla', sans-serif;
    }

    /** Header **/

    .header {
        background-color: #2571ff;
        box-shadow: 0 0 2rem rgba(0, 0, 0, 0.5);
        padding: .5rem 0;
        font-family: 'Protest Guerrilla', sans-serif;
    }

    .text-center {
        text-align: center;
    }

    .text-end {
        text-align: end;
    }

    .text-white {
        color: white;
    }

    .text-black {
        color: black;
    }

    .text-blue {
        color: #2571ff;
    }

    .text-green {
        color: #52ffba;
    }

    .button {
        background-color: #52ffba;
        /* Green */
        border: none;
        color: black;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button:hover {
        background-color: transparent;
    }

    /* Estilos para la impresión */
    @media print {

        /* Ocultar elementos que no deseas incluir en el PDF */
        .no-print {
            display: none;
        }
    }
</style>
