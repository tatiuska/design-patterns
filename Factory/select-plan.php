<?php

use App\Plans\Plan;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$plan = $planFactory = new \App\Plans\PlanFactory();

$planFactory -> createPlan('free');

#dd($planFactory);

?>