@if (session('info-message'))
    @include('layout.backend.alerts.info')
@endif

@if (session('success-message'))
    @include('layout.backend.alerts.success')
@endif

@if (session('warning-message'))
    @include('layout.backend.alerts.warning')
@endif

@if (session('fail-message'))
    @include('layout.backend.alerts.failed')
@endif

@if (session('feature-unavailable'))
    @include('layout.backend.alerts.feature-unavailable')
@endif
