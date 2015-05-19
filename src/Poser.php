<?php

namespace Vluzrmos\BadgePoser;

use Illuminate\Http\Response;
use PUGX\Poser\Image;

class Poser implements Contracts\Poser
{
    /**
     * @var \PUGX\Poser\Poser
     */
    private $poser;

    public function __construct(\PUGX\Poser\Poser $poser)
    {
        $this->poser = $poser;
    }

    /**
     * Generate and Render a badge according to the format.
     *
     * @param $subject
     * @param $status
     * @param $color
     * @param $format
     *
     * @return Image
     */
    public function generate($subject, $status, $color, $format)
    {
        $image = $this->poser->generate($subject, $status, $color, $format);

        return $this->response($image);
    }

    /**
     * Generate and Render a badge according to the format from an URI,
     * eg license-MIT-blue.svg or I_m-liuggio-yellow.svg.
     *
     * @param $string
     *
     * @return Image
     */
    public function generateFromURI($string)
    {
        $image = $this->poser->generateFromURI($string);

        return $this->response($image);
    }

    /**
     * Add response status and reader.
     *
     * @param Image $image
     *
     * @return Response
     */
    protected function response(Image $image)
    {
        return new Response($image, 200, ['Content-Type' => 'image/svg+xml']);
    }
}
