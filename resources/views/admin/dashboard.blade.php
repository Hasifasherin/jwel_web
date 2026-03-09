<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard | Wings of Jewels</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f8f8f8;
    font-family:'Segoe UI', sans-serif;
}

/* Navbar */

.admin-navbar{
    background:white;
    border-bottom:1px solid #eee;
}

.logo{
    height:45px;
}

/* Dashboard Card */

.dashboard-card{
    background:white;
    border-radius:12px;
    box-shadow:0 8px 30px rgba(0,0,0,0.05);
    padding:30px;
}

/* Title */

.dashboard-title{
    color:#C9A227;
    font-weight:600;
}

/* Table */

.table thead{
    background:#C9A227;
    color:white;
}

.table tbody tr:hover{
    background:#faf7ea;
}

/* Badge */

.msg-count{
    background:#C9A227;
    color:white;
    padding:5px 10px;
    border-radius:20px;
    font-size:13px;
}

</style>

</head>

<body>

<!-- Navbar -->

<nav class="navbar admin-navbar px-4 py-3">
    
    <div class="d-flex align-items-center gap-3">
        <img src="{{ asset('images/logo1.png') }}" class="logo">
        <span class="fw-semibold">Wings of Jewels Admin</span>
    </div>

    <div class="d-flex align-items-center gap-3">

        <span class="msg-count">
            {{ $contacts->count() }} Messages
        </span>

        <a href="{{ route('admin.logout') }}" class="btn btn-outline-dark btn-sm">
            Logout
        </a>

    </div>

</nav>


<div class="container mt-5">

<div class="dashboard-card">

<div class="d-flex justify-content-between align-items-center mb-4">

<h4 class="dashboard-title">
Contact Messages
</h4>

</div>


<div class="table-responsive">

<table class="table table-bordered align-middle">

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th style="width:35%">Message</th>
<th>Date</th>
</tr>
</thead>

<tbody>

@forelse($contacts as $contact)

<tr>
<td>{{ $contact->id }}</td>
<td>{{ $contact->name }}</td>
<td>{{ $contact->email }}</td>
<td>{{ $contact->phone }}</td>
<td>{{ $contact->message }}</td>
<td>{{ $contact->created_at->format('d M Y') }}</td>
</tr>

@empty

<tr>
<td colspan="6" class="text-center text-muted">
No messages received yet
</td>
</tr>

@endforelse

</tbody>

</table>

</div>

</div>

</div>

</body>
</html>