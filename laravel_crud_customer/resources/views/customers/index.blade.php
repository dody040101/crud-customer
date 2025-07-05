
<h2>Customer List</h2>
<a href="{{ route('customers.create') }}">Tambah Customer</a>
<table>
    <tr><th>Nama</th><th>Email</th><th>No HP</th><th>Aksi</th></tr>
    @foreach($customers as $cust)
    <tr>
        <td>{{ $cust->name }}</td>
        <td>{{ $cust->email }}</td>
        <td>{{ $cust->phone_number }}</td>
        <td>
            <a href="{{ route('customers.edit', $cust->id) }}">Edit</a>
            <form action="{{ route('customers.destroy', $cust->id) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
