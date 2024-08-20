<form action="{{ isset($contact) ? route('contacts.update', $contact->id) : route('contacts.store') }}" method="POST">
    @csrf
    @if (isset($contact))
        @method('PATCH')
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Name<i class="text-danger">*</i></label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="Enter name" required value="{{ old('name', $contact->name ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="company" class="form-label">Company</label>
        <input type="text" class="form-control" id="company" name="company"
               placeholder="Enter company" value="{{ old('company', $contact->company ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email"
               placeholder="Enter email" value="{{ old('email', $contact->email ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone"
               placeholder="Enter phone number" value="{{ old('phone', $contact->phone ?? '') }}">
    </div>

    <button type="submit" class="btn btn-{{ isset($contact) ? "primary" : "success" }}">{{ isset($contact) ? 'Update' : 'Submit' }}</button>
    <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a>
</form>
