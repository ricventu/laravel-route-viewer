<?php

it('Can be disabled', function () {
    config()->set('route-viewer.enabled', true);

    \PHPUnit\Framework\assertNotNull(route('route-view.index'));

    config()->set('route-viewer.enabled', false);

    \PHPUnit\Framework\assertNull(route('route-view.index'));

});
