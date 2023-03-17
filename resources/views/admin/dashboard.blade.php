<x-layout>
    <div cLass="container-fluid p-5 bg-info text-center ">
        <div class =" row justify-content-center">
            <h1 class="display-1" >Welcome, Admin</h1>
        </div>
    </div>
    
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
        
    @endif
    <div class="container my-5">
        <div  class="row justify-content-center">
            <div class="col-12">
                <h2>Requests for admin role</h2>
                <x-requests-table :roleRequests="$adminRequests" role="admin"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Requests for revisor role</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisor"/>
                
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Requests for writer role</h2>
                <x-requests-table :roleRequests="$writerRequests" role="writer"/>
                
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Platform tags</h2>
                <x-metainfo-tags-table :metaInfos="$tags" metaType="tags"/>
                
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Platform categories</h2>
                <x-metainfo-categories-table :metaInfos="$categories" metaType="categories"/>
                <form class="d-flex pb-5" action="{{route('admin.storeCategory')}}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control me-2" placeholder="New category">
                    <input type="color" name="color" class="form-control me-2">
                    @error('color')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-info text-dark">Add</button>
                </form>
                
                
                
                
            </div>
        </div>
    </div>
    
 </x-layout>