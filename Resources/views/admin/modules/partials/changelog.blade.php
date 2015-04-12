<?php foreach($changelog as $version => $info): ?>
<dl class="dl-horizontal">
    <dt><a href="{{ $info['url'] }}" target="_blank"><i class="fa fa-external-link-square"></i> {{ $version }}</a></dt>
    <dd>
        <?php if (isset($info['added'])): ?>
        @include('workshop::admin.modules.partials.changelog-part', [
            'title' => trans('workshop::modules.added'),
            'label' => 'success',
            'color' => 'green',
            'data' => $info['added']
        ])
        <?php endif; ?>
        <?php if (isset($info['changed'])): ?>
        @include('workshop::admin.modules.partials.changelog-part', [
            'title' => trans('workshop::modules.changed'),
            'label' => 'warning',
            'color' => 'orange',
            'data' => $info['changed']
        ])
        <?php endif; ?>
        <?php if (isset($info['removed'])): ?>
        @include('workshop::admin.modules.partials.changelog-part', [
            'title' => trans('workshop::modules.removed'),
            'label' => 'danger',
            'color' => 'red',
            'data' => $info['removed']
        ])
        <?php endif; ?>
    </dd>
</dl>
<?php endforeach; ?>
