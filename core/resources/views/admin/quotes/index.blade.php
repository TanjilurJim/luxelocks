@extends('admin.layouts.app')

@section('panel')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Quotes</h5>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive--md table-responsive">
            <table class="table table--light style--two">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Requested At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($quotes as $quote)
                    <tr>
                        <td>{{ $quote->id }}</td>
                        <td>{{ $quote->first_name }} {{ $quote->last_name }}</td>
                        <td>
                            @if($quote->status == 'pending')
                                <span class="badge badge--warning">Pending</span>
                            @elseif($quote->status == 'approved')
                                <span class="badge badge--success">Approved</span>
                            @else
                                <span class="badge badge--danger">{{ ucfirst($quote->status) }}</span>
                            @endif
                        </td>
                        <td>{{ showDateTime($quote->created_at) }}</td>
                        <td>
                            <a href="{{ route('admin.quotes.show', $quote->id) }}" class="btn btn-outline--primary btn-sm">
                                <i class="las la-desktop"></i> View
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="100%">No quotes found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="p-3">
            {{ $quotes->links() }}
        </div>
    </div>
</div>
@endsection
