<x-layout>
    <div class="container-fluid my-5">
        <div class="row">
            <h2 class="text-center">{{ __('Pannello di Controllo di Revisione') }}</h2>
        </div>
    </div> 
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3>{{ __('Da Revisionare') }}</h3>
                <x-articles-table
                    :articles="$unrevisionedArticles"
                />
            </div>
        </div>
    </div> 
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3>{{ __('Pubblicati') }}</h3>
                <x-articles-table
                    :articles="$acceptedArticles"
                />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3>{{ __('Rifiutati') }}</h3>
                <x-articles-table
                    :articles="$rejectedArticles"
                />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3>{{ __('Immagini') }}</h3>
                <x-images-table
                    :articles="$acceptedArticles"
                />
            </div>
        </div>
    </div>
</x-layout>