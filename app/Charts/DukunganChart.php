<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;


class DukunganChart
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected LarapexChart $chart
    )
    {
        //
    }

       public function build()
    {
        return $this->chart->pieChart()
            ->setTitle('Top 3 scorers of the team.')
            ->setSubtitle('Season 2021.')
            ->addData([40, 50, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }
}
