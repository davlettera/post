<audio id="myAudio" src="{{ asset('assets/music/Chopin.mp3') }}"></audio>
<script>
    window.onload = function() {
        var audio = document.getElementById("myAudio");
        audio.play();
    }
</script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>body{
    background: -webkit-linear-gradient(left, #4a5e77, #3d4142);
}</style>
<div class="container article-contact-form pt-5 mt-5">
    <div class="article-contact-image">
        <img src="{{asset('assets/images/article-form-image.jpg')}}" width="300" alt=""/>
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
    <form class="shadow" method="post" action="{{route('article.store')}}" enctype="multipart/form-data">
        @csrf

        <h3 class="text-light">Write your Article</h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-label text-light">Title:</label>
                    <input for="title" type="text" id="title"  name="title" class="form-control" placeholder="title" value="{{old('title')}}" />
                </div>
                <div class="article-form-group">
                    <label for="subtitle" class="form-label text-light">Subtitle:</label>
                    <input for="subtitle" type="text" id="subtitle" name="subtitle" class="form-control" placeholder="subtitle" value="{{old('subtitle')}}" />
                </div>
                <div class="article-form-group">
                    <label for="image" class="form-label text-light">Image:</label>
                    <input for="image" type="file" id="image"  name="image" class="form-control" /> 
                </div>
                <div class="article-form-group">
                    <label for="category" class="form-label text-light">Category:</label>
                    <select  id="category" name="category" class="form-control text-capitalize">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="article-form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                </div> --}}
                <div class="mt-2">
                    <span class="small fst-italic text-white" >divide each tag with a comma</span>                   
                    {{-- <label for="tags" class="form-label text-white">Tags:</label> --}}
                    <input name="tags" id="tags" class="form-control" value="{{old('tags')}}" placeholder="Tags" >
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="article-form-group">
                    <label for="body" class="form-label text-light">Article Body:</label>
                    <textarea name="body" id="body" class="form-control"  style="width: 100%; height: 300px;">{{old('body')}}</textarea>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-dark text-white">
                            Send
                        </button>
                        <a class="btn btn-dark text-light" href="{{route('homepage')}}">Back to Home</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
</div>