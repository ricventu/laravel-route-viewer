<?php

it('index', function () {
    $this->withoutVite()
        ->get('/route-viewer')
        ->assertOk();
});

// manifest.json not found
//it('index content', function () {
//    $this->get('/route-viewer')
//        ->assertOk()
//    ;
//});
