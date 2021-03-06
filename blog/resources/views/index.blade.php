 @extends('layout')


 @section('index')

     <div class="container">
         <a href="/create" class="btn btn-primary mt-3 mb-3">Create Article</a>


         <table class="table">
             <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">Author</th>
                     <th scope="col">Book Title</th>
                     <th scope="col">Jumlah halaman</th>
                     <th scope="col">Tahun terbit</th>

                 </tr>
             </thead>
             <tbody>
                 @foreach ($articles as $article)
                     <tr>
                         <th>{{ $loop->iteration }}</th>
                         <td>{{ $article->penulis }}</td>
                         <td>{{ $article->judul }}</td>
                         <td>{{ $article->halaman }}</td>
                         <td>{{ $article->tahun }}</td>


                         <td>
                             <a href="/update/{{ $article->id }}" class="btn btn-success">Edit</a>
                             <form action="/delete/{{ $article->id }}" method="POST">
                                 @csrf
                                 @method('delete')

                                 <button class="btn btn-danger">Delete</button>
                             </form>
                         </td>
                     </tr>
                     <tr>
                 @endforeach
             </tbody>
         </table>

     </div>

 @endsection



 <!-- Optional JavaScript; choose one of the two! -->

 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
 </script>

 <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
 </body>

 </html>
