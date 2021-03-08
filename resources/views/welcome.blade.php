<x-layouts>
    @if (session('announcement.create.success'))
        <div class="alert alert-success text-center">
            <p>Annuncio creato correttamente</p>
        </div>
    @endif
    <h1>Questo è il blog</h1>
</x-layouts>
