@extends('admin.layouts.app')

@section('panel')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Quote Details</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $quote->id }}</td>
                    </tr>
                    <tr>
                        <th>Customer Name</th>
                        <td>{{ $quote->first_name }} {{ $quote->last_name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $quote->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $quote->phone ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $quote->address ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Business Name</th>
                        <td>{{ $quote->business_name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Business Type</th>
                        <td>{{ $quote->business_type ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>License Type</th>
                        <td>{{ $quote->license_type ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>License Number</th>
                        <td>{{ $quote->license_number ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td>{{ $quote->message ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            @if ($quote->status == 'pending')
                                <span class="badge badge--warning">Pending</span>
                            @elseif($quote->status == 'approved')
                                <span class="badge badge--success">Approved</span>
                            @else
                                <span class="badge badge--danger">{{ ucfirst($quote->status) }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Requested At</th>
                        <td>{{ showDateTime($quote->created_at) }}</td>
                    </tr>
                </tbody>
            </table>

            {{-- Quote Items Section --}}
            {{-- Quote Items Section --}}
            <h5 class="mt-4">Requested Items</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Variant</th>
                        <th>Base Size</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quote->quoteItems as $item)
                        <tr>
                            <td>{{ $item->product->name ?? 'Unknown Product' }}</td>
                            <td>{{ $item->variant->name ?? 'N/A' }}</td>
                            <td>{{ $item->base_size ?? 'N/A' }}</td>

                            <td>{{ $item->quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <a href="{{ route('admin.quotes.index') }}" class="btn btn-secondary">
                <i class="las la-arrow-left"></i> Back
            </a>
            @if ($quote->status == 'pending')
                <form action="{{ route('admin.quotes.approve', $quote->id) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-success">
                        <i class="las la-check"></i> Approve
                    </button>
                </form>
                <form action="{{ route('admin.quotes.reject', $quote->id) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="las la-times"></i> Reject
                    </button>
                </form>
            @endif
        </div>
    </div>
@endsection
