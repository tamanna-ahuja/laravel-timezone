@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Skill</th>
                            <th>Timezone</th>
                            <th>Created_at</th>

</thead>

<tbody>
@foreach($users as $user)



    <tr>

      <td>{{$user->name}} </td>
      <td>
          @foreach($user[skill] as $s)
            {{$s}},
        @endforeach
      </td>
      <td>{{$user->timezone}} </td>
      <td>{{date('d-m-Y',strtotime(user->timezone)}}</td>
    </tr>

</tbody>

</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
