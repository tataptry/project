<h1>Data Users</h1>

<h2>Semua Users</h2>
<ul>
    @foreach($allUsers as $users)
    <li>{{ $users->name }} ({{ $users->email }})</li>
    @endforeach
</ul>

<hr>

<h2>User Pertama</h2>
@if($firstUser)
<p>{{ $firstUser->name }} - {{ $firstUser->email }}</p>
@else
<p>Data Kosong</p>
@endif

<hr>

<h2>Pluck - Nama Saja</h2>
<ul>
    @foreach ($userNames as $name)
    <li>{{ $name }}</li> 
    @endforeach
</ul>

<hr>

<h2>Jumlah Users</h2>
<p>Total: {{ $userCount }}</p>

<hr>

<h2>User Diurutkan (orderBy name)</h2>
<ul>
    @foreach ($orderedUsers as $users )
    <li>{{ $users->name }}</li>   
    @endforeach
</ul>

<hr>

<h2>2 User Pertama (limit)</h2>
<ul>
    @foreach ($limitedUsers as $users)
    <li>{{ $users->name }}</li> 
    @endforeach
</ul>