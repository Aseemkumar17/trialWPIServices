<?php

namespace wtiservice\WtiService;

interface IWpiService
{
    public function Performance($url, $apiKey);

    public function PerformanceMetric($data, $metricName = null);
}
