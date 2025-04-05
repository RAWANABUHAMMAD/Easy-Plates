@extends('dashboard.masterpage')

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Messages table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sender</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Reply</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Received</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $message->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{ $message->email }}</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs text-secondary mb-0">{{ Str::limit($message->message, 30) }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if($message->reply)
                                            <span class="badge badge-sm bg-gradient-success">Replied</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-secondary">Pending</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        @if($message->reply)
                                            <p class="text-xs text-secondary mb-0">{{ Str::limit($message->reply, 30) }}</p>
                                        @else
                                            <p class="text-xs text-secondary mb-0">-</p>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $message->created_at->format('d/m/Y') }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#replyModal{{ $message->id }}" data-toggle="tooltip" data-original-title="Reply">
                                            Reply
                                        </a>
                                        <span class="text-secondary font-weight-bold text-xs"> | </span>
                                        <form action="{{ route('contacts.destroy', $message->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-secondary font-weight-bold text-xs border-0 bg-transparent" style="cursor:pointer;" data-toggle="tooltip" data-original-title="Delete">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Reply Modal -->
                                <div class="modal fade" id="replyModal{{ $message->id }}" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-gradient-dark shadow-dark">
                                                <h5 class="modal-title text-white" id="replyModalLabel">Reply to {{ $message->name }}</h5>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm"><strong>Original Message:</strong></p>
                                                    <p class="text-xs text-secondary mb-3">{{ $message->message }}</p>
                                                </div>
                                                <form action="{{ route('contacts.update', $message->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="reply" class="form-label">Your Reply</label>
                                                        <textarea class="form-control border-radius-lg" name="reply" rows="3" required>{{ old('reply', $message->reply) }}</textarea>
                                                    </div>
                                                    <button type="submit" class="btn bg-gradient-dark shadow-dark">Send Reply</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection