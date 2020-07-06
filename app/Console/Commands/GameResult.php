<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GameResult extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'command:name';
    protected $signature = 'gameResult';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $inputTeamA = $this->ask('Enter A Teams players:');
        $inputTeamB = $this->ask('Enter B Teams players:');
        $teamA = explode(',', trim($inputTeamA,","));
        $teamB = explode(',', trim($inputTeamB,","));

        if (count($teamA) == 5 && count($teamB) == 5 ) {
            asort($teamA);
            $tempArr = array();
            foreach ($teamA as $key => $value) {
                $temp = $value;
                foreach ($teamB as $bKey => $bValue) {
                    if ($temp >= $bValue && !in_array($bValue, $tempArr)) {
                        $tempKey = $bKey;
                        $temp = $bValue;
                    }
                }   
                $finalArr[$tempKey] = $value;
                $tempArr[] =$temp;  
            }
            ksort($finalArr);
            echo "Team A ===> ";
            print_r($finalArr);
            echo "\nTeam B ===> ";
            print_r($teamB);
            echo "\n Result ===> ";
            if (count($finalArr) < 5) {
                echo "\nLoss\n";
            }else{
                echo "\nWin\n";
            }
        }else{
            echo "Enter valid input.";
        }
    }
}
