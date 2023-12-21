@extends('layouts.app');

@section('content')
<head>
  
</head>
  <section class="container">
    <h1>Projects</h1>
  </section>
  <section class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Slug</th>
          <th>edit</th>
          <th>delete</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($projects as $project)
          <tr>
            <tr>{{$project->id}}</tr>
            <tr>
              <a href="{{route('admin.projects.show', $project)}}">{{$project->title}}</a>
            </tr>
            <tr>{{$project->slug}}</tr>
            <tr>
              <a href="{{route('admin.projects.edit', $project)}}">edit</a>
            </tr>
            <tr>
              <form action="{{route('admin.projects.destroy', $project)}}" method="post">
                @csrf
                @method('DELETE')

                <input type="submit" value="delete">
              </form>
            </tr>
          </tr>
        @empty
          <tr>
            <td>Nessun progetto</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </section>
@endsection