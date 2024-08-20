@if(count($contacts) > 0)
    <table class="table table-bordered bg-white table-striped" id="contacts-table">
        <thead>
        <tr>
            <th>NAME</th>
            <th>COMPANY</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contacts as $contact)
            <tr class="align-middle">
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->company }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->email }}</td>
                <td>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-link">Edit</a> |
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link"
                                onclick="return confirm('Are you sure you want to delete?');">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div id="pagination-links">
        {{ $contacts->links() }}
    </div>
@else
    <span>No contact list records found for logged-in user. <br> Try adding by clicking this button</span>
    <a href="{{ route('contacts.create') }}" class="btn btn-success btn-sm">Add Contact</a>
@endif
