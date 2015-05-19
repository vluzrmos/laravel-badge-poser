<?php

namespace Vluzrmos\BadgePoser\Contracts;

interface Poser
{
    public function generate($subject, $status, $color, $format);

    public function generateFromURI($string);
}
