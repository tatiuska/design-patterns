<?php 
// criando um padrão de projeto para tipos de plano de assinatura de um app

namespace App\Plans;

class PlanFactory {

    public function createPlan($plan = 'free'): Plan {

        $planName = "App\\Plans\\" . ucwords($plan) . "\\Plan";

        if (!class_exists($planName)) {
            throw new \Exception('A class with the name ' . $planName . ' could not be found.');
        }

        return new $planName();

    }
}
?>