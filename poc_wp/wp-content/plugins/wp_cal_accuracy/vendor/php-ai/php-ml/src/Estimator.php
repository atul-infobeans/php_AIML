<?php

declare(strict_types=1);

namespace Phpml;

interface Estimator
{

    /**
     * @return mixed
     */
    public function predict(array $samples);
}
