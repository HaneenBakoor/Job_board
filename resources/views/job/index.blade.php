<div>
<h1>
    Job Board
</h1>
<h1>
    My Name : {{ $name }}
</h1>
@foreach($jobs as $job)
<div>{{ $job['title'] }} : {{ $job['salary'] }}
</div>

@endforeach
</div>

