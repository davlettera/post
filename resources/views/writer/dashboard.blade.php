<x-layout>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <h1 class="text-center"></h1>
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
                <h2>Articles to review</h2>
                <x-writer-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div> 
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Published articles</h2>
                <x-writer-articles-table :articles="$acceptedArticles"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Rejected articles</h2>
                <x-writer-articles-table :articles="$rejectedArticles"/>
            </div>
        </div>
    </div>
</x-layout>