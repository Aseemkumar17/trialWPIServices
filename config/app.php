<?php
return [
'providers' => ServiceProvider::defaultProviders()->merge([
        

        wpiservices\WpiServices\IWpiServiceProvider::class,
        wpiservices\WpiServices\PerformanceServiceProvider::class,

    ])->toArray(),
    ];