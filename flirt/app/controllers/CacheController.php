<?php

class CacheController extends Controller {

    public function cleanAll() {
       return Artisan::call('cache:clear');
    }

}
