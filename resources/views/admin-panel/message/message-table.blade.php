<!--begin: Datatable-->
<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Phone number') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Message') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->phone_number }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->messages }}</td>
                <td>@include('admin-panel.message.message-action', ['model' => $message])</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        <div>
            {{ $messages->links('layouts.admin.pagination') }}
        </div>
    </div>
</div>
<!--end: Datatable-->
