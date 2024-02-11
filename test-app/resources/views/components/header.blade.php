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
