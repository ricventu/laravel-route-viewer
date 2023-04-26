<?php

it('index', function () {
    $this->get(route('route-viewer.index'))
        ->assertInertia(fn (\Inertia\Testing\AssertableInertia $page) => $page
            ->component('Index')->has('routes')
        );
});
