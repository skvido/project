<?php

namespace App\Console\Commands;

use App\Models\City;
use Illuminate\Console\Command;
use KubAT\PhpSimple\HtmlDomParser;

class ImportData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data about cities from website https://www.e-obce.sk to database';

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
     * @return int
     */
    public function handle()
    {
        $url = config('constants.dataUrl');
        for ($i = 0; $i < 3000; $i = $i + 500) {
            $dom = HtmlDomParser::file_get_html($url.'?strana='.$i);
            $cities = $dom->find('<div>')[8]->find('<table>')[8]->find('<a>');

            foreach ($cities as $city) {
                $cityUrl = $city->getAttribute('href');
                City::insertData($this->parseData($cityUrl));
            }
        }
    }

    private function parseData($url){
        $dom = HtmlDomParser::file_get_html($url);
        $data_elements = $dom->find('<table>')[17]->find('<td>');

        $mayor = null;
        //check if there is column with mayor name (because in same cases there isnt even empty one)
        if (count($dom->find('<table>')[20]->find('<td>')) > 16){
            //converting format of text to utf-8
            $mayor = iconv('CP1250','UTF-8',$dom->find('<table>')[20]->find('<td>')[16]->innertext);
        }

        //parsing emails
        $emails = null;
        $email_elements = $data_elements[14]->find('<a>');
        if (count($email_elements) > 0) {
            $emails = $email_elements[0]->innertext;
            //if there is more than one email
            for ($i = 1; $i < count($email_elements); $i++) {
                $emails = $emails . ' ' . $email_elements[$i]->innertext;
            }
        }

        //parsing web address
        $web_address = null;
        $web_address_elements = $data_elements[17]->find('<a>');
        if (count($web_address_elements) > 0) {
            $web_address = $web_address_elements[0]->innertext;
            for ($i = 1; $i < count($web_address_elements); $i++) {
                $web_address = $web_address . ' ' . $web_address_elements[$i]->innertext;
            }
        }

        //parsing city_name
        $city_name = iconv('CP1250','UTF-8',explode('<',$data_elements[0]->find('<h1>')[0]->innertext)[0]);
        $city_name = explode(" ",$city_name);
        array_shift($city_name);
        $city_name = implode(" ",$city_name);

        $data = [
            'id' => explode('/', $url)[4],
            'city_name' => $city_name,
            'mayor_name' => $mayor,
            'address' => iconv('CP1250','UTF-8',$data_elements[12]->innertext),
            'phone_number' => $data_elements[7]->find('<td>')[0]->innertext,
            'fax' => $data_elements[11]->innertext,
            'email' => iconv('CP1250','UTF-8',$emails),
            'web_address' => $web_address,
            'image_url' => $data_elements[4]->find('<img>')[0]->getAttribute('src'),
            'latitude' => 0,
            'longitude' => 0
        ];

        return $data;
    }
}
