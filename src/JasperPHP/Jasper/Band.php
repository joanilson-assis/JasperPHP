<?php

namespace JasperPHP\Jasper;

use JasperPHP\Factory\BandFactory;
use JasperPHP\JFPDF;

/**
 * Class Band
 * @package JasperPHP\Jasper
 */
class Band
{
    /**
     * @var JFPDF
     */
    private $pdf;
    /**
     * @var
     */
    private $jasper;

    /**
     * Band constructor.
     * @param $pdf
     * @param $jasper
     */
    public function __construct(JFPDF $pdf, $jasper)
    {
        $this->pdf = $pdf;
        $this->jasper = $jasper;
    }

    /**
     * method
     */
    public function run()
    {
        $band = new BandFactory($this->pdf, $this->jasper);
        $band->makeBand();
    }
}