
<form method="POST" action="{{ route('customers.store') }}">
    @csrf
    <label>Nama</label>
    <input type="text" name="name" required>
    <label>Email</label>
    <input type="email" name="email">
    <label>Phone</label>
    <input type="text" name="phone_number">
    <button type="submit">Simpan</button>
</form>
