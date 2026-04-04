@php
    $show_check = $show_check ?? false;
@endphp

<a href="{{ isset($slug) ? route($route . 'show', $slug) : route($route . 'show', $id ?? $item->id) }}"
    class="btn btn-sm btn-clean btn-icon btn-hover-primary">
    <i class="fa fa-eye"></i>
</a>

@if (!isset($hide_edit))
    <a href="{{ isset($slug) ? route($route . 'edit', $slug) : route($route . 'edit', $id ?? $item->id) }}"
        class="btn btn-sm btn-clean btn-icon btn-hover-info">
        <i class="fa fa-pencil-alt"></i>
    </a>
@endif

{{-- reset password redirection --}}
@if (\Route::currentRouteName() === 'users.index')
    <a href="{{ route('reset-passwords.edit', $id ?? $item->id) }}" class="btn btn-sm btn-clean btn-icon btn-hover-info">
        <i class="fa fa-key"></i>
    </a>
@endif

@if (!isset($hide_delete))
    <form class="d-inline" action="{{ route($route . 'destroy', $id ?? $item->id) }}" method="POST"
        onclick="return confirm('Are you sure?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-clean btn-icon btn-hover-danger">
            <i class="fa fa-trash"></i>
        </button>
    </form>
@endif

@if($show_check)
    <form class="d-inline" action="{{ route($route . 'markAsPaid', $id) }}" method="POST" onclick="return confirm('Are you sure the selected user has paid for the appointment?')">
        @csrf
        <button class="btn btn-sm btn-clean btn-icon btn-hover-success"  {{ $status == 'paid' ? 'disabled' : '' }}>
            <i class="fa fa-check"></i>
        </button>
    </form>
@endif

@foreach ($actions ?? [] as $action)
    {!! $action !!}
@endforeach
