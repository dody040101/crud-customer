
<form method="POST" action="{{ route('customers.update', $customer->id) }}">
    @csrf @method('PUT')
    <label>Nama</label>
    <input type="text" name="name" value="{{ $customer->name }}" required>
    <label>Email</label>
    <input type="email" name="email" value="{{ $customer->email }}">
    <label>Phone</label>
    <input type="text" name="phone_number" value="{{ $customer->phone_number }}">
    <button type="submit">Update</button>
</form>
