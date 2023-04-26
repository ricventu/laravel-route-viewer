<?php

it('index', function () {
    $this->get('/route-viewer')
        ->assertInertia(fn (\Inertia\Testing\AssertableInertia $page) => $page
            ->component('Index')->has('routes')
        );
});
