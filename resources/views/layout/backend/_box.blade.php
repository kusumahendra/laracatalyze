<div class="box {{ $boxClass or '' }}">
    <div class="box-header with-border">
        <h3 class="box-title">
            {{ $title or 'a' }}
        </h3>
        <div class="box-tools pull-right">{{ $boxTool or '' }}</div>
    </div>
    <div class="box-body {{ $bodyClass or '' }}">
        {{ $slot }}
    </div>
    <div class="box-footer {{ $footerClass or '' }}">
        {{ $footer or '' }}
    </div>
</div>