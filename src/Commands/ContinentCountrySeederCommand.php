<?php

namespace Aliuwahab\ContinentCountrySeeder\Commands;

use Aliuwahab\ContinentCountrySeeder\Models\Continent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ContinentCountrySeederCommand extends Command
{
    public $signature = 'continent-country-seeder';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        $europe = Continent::create(['name' => 'Europe']);
        $africa = Continent::create(['name' => 'Africa']);
        $asia = Continent::create(['name' => 'Asia']);
        $northAmerica = Continent::create(['name' => 'North America']);
        $southAmerica = Continent::create(['name' => 'South America']);
        $australiaOceania = Continent::create(['name' => 'Australia/Oceania']);
        $antartica = Continent::create(['name' => 'Antarctica']);

        DB::table('countries')->delete();

        $africanCountries = [
            ['code' => 'GH', 'name' => 'Ghana', 'continent_id' => $africa->id, 'currency' => 'GHS'],
            ['code' => 'NG', 'name' => 'Nigeria', 'continent_id' => $africa->id, 'currency' => 'NGN'],
            ['code' => 'ZA', 'name' => 'South Africa', 'continent_id' => $africa->id, 'currency' => 'ZAR'],
            ['code' => 'DZ', 'name' => 'Algeria', 'continent_id' => $africa->id, 'currency' => 'DZD'],
            ['code' => 'AO', 'name' => 'Angola', 'continent_id' => $africa->id, 'currency' => 'AOA'],
            ['code' => 'BJ', 'name' => 'Benin', 'continent_id' => $africa->id, 'currency' => 'XOF'],
            ['code' => 'BW', 'name' => 'Botswana', 'continent_id' => $africa->id, 'currency' => 'BWP'],
            ['code' => 'BF', 'name' => 'Burkina Faso', 'continent_id' => $africa->id, 'currency' => 'XOF'],
            ['code' => 'BI', 'name' => 'Burundi', 'continent_id' => $africa->id, 'currency' => 'BIF'],
            ['code' => 'CM', 'name' => 'Cameroon', 'continent_id' => $africa->id, 'currency' => 'XAF'],
            ['code' => 'CV', 'name' => 'Cape Verde', 'continent_id' => $africa->id, 'currency' => 'CVE'],
            ['code' => 'CF', 'name' => 'Central African Republic', 'continent_id' => $africa->id, 'currency' => 'XAF'],
            ['code' => 'TD', 'name' => 'Chad', 'continent_id' => $africa->id, 'currency' => 'XAF'],
            ['code' => 'KM', 'name' => 'Comoros', 'continent_id' => $africa->id, 'currency' => 'KMF'],
            ['code' => 'CG', 'name' => 'Congo', 'continent_id' => $africa->id, 'currency' => 'CDF'],
            ['code' => 'DJ', 'name' => 'Djibouti', 'continent_id' => $africa->id, 'currency' => 'DJF'],
            ['code' => 'GQ', 'name' => 'Equatorial Guinea', 'continent_id' => $africa->id, 'currency' => 'XAF'],
            ['code' => 'ER', 'name' => 'Eritrea', 'continent_id' => $africa->id, 'currency' => 'ERN'],
            ['code' => 'ET', 'name' => 'Ethiopia', 'continent_id' => $africa->id, 'currency' => 'ETB'],
            ['code' => 'EG', 'name' => 'Egypt', 'continent_id' => $africa->id, 'currency' => 'EGP'],
            ['code' => 'ER', 'name' => 'Eritrea', 'continent_id' => $africa->id, 'currency' => 'ERN'],
            ['code' => 'GA', 'name' => 'Gabon', 'continent_id' => $africa->id, 'currency' => 'XAF'],
            ['code' => 'GM', 'name' => 'Gambia', 'continent_id' => $africa->id, 'currency' => 'GMD'],
            ['code' => 'GN', 'name' => 'Guinea', 'continent_id' => $africa->id, 'currency' => 'GNF'],
            ['code' => 'GW', 'name' => 'Guinea-Bissau', 'continent_id' => $africa->id, 'currency' => 'XOF'],
            ['code' => 'CI', 'name' => 'Ivory Coast', 'continent_id' => $africa->id, 'currency' => 'XOF'],
            ['code' => 'KE', 'name' => 'Kenya', 'continent_id' => $africa->id, 'currency' => 'KES'],
            ['code' => 'LS', 'name' => 'Lesotho', 'continent_id' => $africa->id, 'currency' => 'LSL'],
            ['code' => 'LR', 'name' => 'Liberia', 'continent_id' => $africa->id, 'currency' => 'LRD'],
            ['code' => 'LY', 'name' => 'Libya', 'continent_id' => $africa->id, 'currency' => 'LYD'],
            ['code' => 'MG', 'name' => 'Madagascar', 'continent_id' => $africa->id, 'currency' => 'MGA'],
            ['code' => 'MW', 'name' => 'Malawi', 'continent_id' => $africa->id, 'currency' => 'MWK'],
            ['code' => 'ML', 'name' => 'Mali', 'continent_id' => $africa->id, 'currency' => 'XOF'],
            ['code' => 'MR', 'name' => 'Mauritania', 'continent_id' => $africa->id, 'currency' => 'MRU'],
            ['code' => 'MU', 'name' => 'Mauritius', 'continent_id' => $africa->id, 'currency' => 'MUR'],
            ['code' => 'MA', 'name' => 'Morocco', 'continent_id' => $africa->id, 'currency' => 'MAD'],
            ['code' => 'MZ', 'name' => 'Mozambique', 'continent_id' => $africa->id, 'currency' => 'MZN'],
            ['code' => 'NA', 'name' => 'Namibia', 'continent_id' => $africa->id, 'currency' => 'NAD'],
            ['code' => 'NE', 'name' => 'Niger', 'continent_id' => $africa->id, 'currency' => 'XOF'],
            ['code' => 'SS', 'name' => 'South Sudan', 'continent_id' => $africa->id, 'currency' => 'SSP'],
            ['code' => 'RW', 'name' => 'Rwanda', 'continent_id' => $africa->id, 'currency' => 'RWF'],
            ['code' => 'ST', 'name' => 'Sao Tome and Principe', 'continent_id' => $africa->id, 'currency' => 'STD'],
            ['code' => 'SN', 'name' => 'Senegal', 'continent_id' => $africa->id, 'currency' => 'XOF'],
            ['code' => 'SC', 'name' => 'Seychelles', 'continent_id' => $africa->id, 'currency' => 'SCR'],
            ['code' => 'SL', 'name' => 'Sierra Leone', 'continent_id' => $africa->id, 'currency' => 'SLL'],
            ['code' => 'SO', 'name' => 'Somalia', 'continent_id' => $africa->id, 'currency' => 'SOS'],
            ['code' => 'SD', 'name' => 'Sudan', 'continent_id' => $africa->id, 'currency' => 'SDG'],
            ['code' => 'SZ', 'name' => 'Swaziland', 'continent_id' => $africa->id, 'currency' => 'SZL'],
            ['code' => 'TZ', 'name' => 'Tanzania', 'continent_id' => $africa->id, 'currency' => 'TZS'],
            ['code' => 'TG', 'name' => 'Togo', 'continent_id' => $africa->id, 'currency' => 'XOF'],
            ['code' => 'TN', 'name' => 'Tunisia', 'continent_id' => $africa->id, 'currency' => 'TND'],
            ['code' => 'UG', 'name' => 'Uganda', 'continent_id' => $africa->id, 'currency' => 'UGX'],
            ['code' => 'ZR', 'name' => 'Zaire', 'continent_id' => $africa->id, 'currency' => 'ZRN'],
            ['code' => 'ZM', 'name' => 'Zambia', 'continent_id' => $africa->id, 'currency' => 'ZMW'],
            ['code' => 'ZW', 'name' => 'Zimbabwe', 'continent_id' => $africa->id, 'currency' => 'USD'],
        ];

        $europeanCountries = [
            ['code' => 'AL', 'name' => 'Albania', 'continent_id' => $europe->id, 'currency' => 'ALL'],
            ['code' => 'AD', 'name' => 'Andorra', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'AM', 'name' => 'Armenia', 'continent_id' => $europe->id, 'currency' => 'AMD'],
            ['code' => 'AT', 'name' => 'Austria', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'AZ', 'name' => 'Azerbaijan', 'continent_id' => $europe->id, 'currency' => 'AZN'],
            ['code' => 'BY', 'name' => 'Belarus', 'continent_id' => $europe->id, 'currency' => 'BYN'],
            ['code' => 'BE', 'name' => 'Belgium', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'BA', 'name' => 'Bosnia and Herzegovina', 'continent_id' => $europe->id, 'currency' => 'BAM'],
            ['code' => 'BG', 'name' => 'Bulgaria', 'continent_id' => $europe->id, 'currency' => 'BGN'],
            ['code' => 'CY', 'name' => 'Cyprus', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'CZ', 'name' => 'Czech Republic', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'HR', 'name' => 'Croatia', 'continent_id' => $europe->id, 'currency' => 'HRK'],
            ['code' => 'EE', 'name' => 'Estonia', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'DK', 'name' => 'Denmark', 'continent_id' => $europe->id, 'currency' => 'DKK'],
            ['code' => 'FI', 'name' => 'Finland', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'FR', 'name' => 'France', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'GE', 'name' => 'Georgia', 'continent_id' => $europe->id, 'currency' => 'GEL'],
            ['code' => 'DE', 'name' => 'Germany', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'GI', 'name' => 'Gibraltar', 'continent_id' => $europe->id, 'currency' => 'GIP'],
            ['code' => 'GR', 'name' => 'Greece', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'HU', 'name' => 'Hungary', 'continent_id' => $europe->id, 'currency' => 'HUF'],
            ['code' => 'IS', 'name' => 'Iceland', 'continent_id' => $europe->id, 'currency' => 'ISK'],
            ['code' => 'IE', 'name' => 'Ireland', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'IT', 'name' => 'Italy',  'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'LV', 'name' => 'Latvia', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'LI', 'name' => 'Liechtenstein', 'continent_id' => $europe->id, 'currency' => 'CHF'],
            ['code' => 'LT', 'name' => 'Lithuania', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'LU', 'name' => 'Luxembourg', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'MK', 'name' => 'Macedonia', 'continent_id' => $europe->id, 'currency' => 'MKD'],
            ['code' => 'MT', 'name' => 'Malta', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'MD', 'name' => 'Moldova, Republic of', 'continent_id' => $europe->id, 'currency' => 'MDL'],
            ['code' => 'NL', 'name' => 'Netherlands', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'NO', 'name' => 'Norway', 'continent_id' => $europe->id, 'currency' => 'NOK'],
            ['code' => 'PL', 'name' => 'Poland', 'continent_id' => $europe->id, 'currency' => 'PLN'],
            ['code' => 'PT', 'name' => 'Portugal', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'RO', 'name' => 'Romania', 'continent_id' => $europe->id, 'currency' => 'RON'],
            ['code' => 'RU', 'name' => 'Russia', 'continent_id' => $europe->id, 'currency' => 'RUB'],
            ['code' => 'SM', 'name' => 'San Marino', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'RS', 'name' => 'Serbia', 'continent_id' => $europe->id, 'currency' => 'RSD'],
            ['code' => 'SK', 'name' => 'Slovakia', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'SI', 'name' => 'Slovenia', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'ES', 'name' => 'Spain', 'continent_id' => $europe->id, 'currency' => 'EUR'],
            ['code' => 'SE', 'name' => 'Sweden', 'continent_id' => $europe->id, 'currency' => 'SEK'],
            ['code' => 'CH', 'name' => 'Switzerland', 'continent_id' => $europe->id, 'currency' => 'CHF'],
            ['code' => 'UA', 'name' => 'Ukraine', 'continent_id' => $europe->id, 'currency' => 'UAH'],
            ['code' => 'GB', 'name' => 'United Kingdom', 'continent_id' => $europe->id, 'currency' => 'GBP'],
            ['code' => 'YU', 'name' => 'Yugoslavia', 'continent_id' => $europe->id, 'currency' => 'YUM'],
        ];

        $northAmericanCountries = [
            ['code' => 'CA', 'name' => 'Canada', 'continent_id' => $northAmerica->id, 'currency' => 'CAD'],
            ['code' => 'CR', 'name' => 'Costa Rica', 'continent_id' => $northAmerica->id, 'currency' => 'CRC'],
            ['code' => 'BB', 'name' => 'Barbados', 'continent_id' => $northAmerica->id, 'currency' => 'BBD'],
            ['code' => 'DO', 'name' => 'Dominican Republic', 'continent_id' => $northAmerica->id, 'currency' => 'DOP'],
            ['code' => 'SV', 'name' => 'El Salvador', 'continent_id' => $northAmerica->id, 'currency' => 'SVC'],
            ['code' => 'GL', 'name' => 'Greenland', 'continent_id' => $northAmerica->id, 'currency' => 'DKK'],
            ['code' => 'GT', 'name' => 'Guatemala', 'continent_id' => $northAmerica->id, 'currency' => 'GTQ'],
            ['code' => 'HT', 'name' => 'Haiti', 'continent_id' => $northAmerica->id, 'currency' => 'HTG'],
            ['code' => 'HN', 'name' => 'Honduras', 'continent_id' => $northAmerica->id, 'currency' => 'HNL'],
            ['code' => 'MX', 'name' => 'Mexico', 'continent_id' => $northAmerica->id, 'currency' => 'MXN'],
            ['code' => 'NI', 'name' => 'Nicaragua', 'continent_id' => $northAmerica->id, 'currency' => 'NIO'],
            ['code' => 'PA', 'name' => 'Panama', 'continent_id' => $northAmerica->id, 'currency' => 'PAB'],
            ['code' => 'UM', 'name' => 'United States of America', 'continent_id' => $northAmerica->id, 'currency' => 'USD'],
        ];

        $southAmericanCountries = [
            ['code' => 'AR', 'name' => 'Argentina', 'continent_id' => $southAmerica->id, 'currency' => 'ARS'],
            ['code' => 'BR', 'name' => 'Brazil', 'continent_id' => $southAmerica->id, 'currency' => 'BRL'],
            ['code' => 'CL', 'name' => 'Chile', 'continent_id' => $southAmerica->id, 'currency' => 'CLP'],
            ['code' => 'CO', 'name' => 'Colombia', 'continent_id' => $southAmerica->id, 'currency' => 'COP'],
            ['code' => 'EC', 'name' => 'Ecuador', 'continent_id' => $southAmerica->id, 'currency' => 'USD'],
            ['code' => 'GY', 'name' => 'Guyana', 'continent_id' => $southAmerica->id, 'currency' => 'GYD'],
            ['code' => 'PY', 'name' => 'Paraguay', 'continent_id' => $southAmerica->id, 'currency' => 'PYG'],
            ['code' => 'PE', 'name' => 'Peru', 'continent_id' => $southAmerica->id, 'currency' => 'PEN'],
            ['code' => 'BO', 'name' => 'Bolivia', 'continent_id' => $southAmerica->id, 'currency' => 'BOB'],
            ['code' => 'SR', 'name' => 'Suriname', 'continent_id' => $southAmerica->id, 'currency' => 'GHS'],
            ['code' => 'TT', 'name' => 'Trinidad and Tobago', 'continent_id' => $southAmerica->id, 'currency' => 'TTD'],
            ['code' => 'UY', 'name' => 'Uruguay', 'continent_id' => $southAmerica->id, 'currency' => 'UYU'],
            ['code' => 'VE', 'name' => 'Venezuela', 'continent_id' => $southAmerica->id, 'currency' => 'VED'],
        ];

        $asianCountries = [
            ['code' => 'AF', 'name' => 'Afghanistan', 'continent_id' => $asia->id, 'currency' => 'AFN'],
            ['code' => 'BH', 'name' => 'Bahrain', 'continent_id' => $asia->id, 'currency' => 'BHD'],
            ['code' => 'BD', 'name' => 'Bangladesh', 'continent_id' => $asia->id, 'currency' => 'BDT'],
            ['code' => 'BN', 'name' => 'Brunei', 'continent_id' => $asia->id, 'currency' => 'BND'],
            ['code' => 'KH', 'name' => 'Cambodia', 'continent_id' => $asia->id, 'currency' => 'KHR'],
            ['code' => 'CN', 'name' => 'China', 'continent_id' => $asia->id, 'currency' => 'CNY'],
            ['code' => 'JP', 'name' => 'Japan', 'continent_id' => $asia->id, 'currency' => 'JPY'],
            ['code' => 'IN', 'name' => 'India', 'continent_id' => $asia->id, 'currency' => 'INR'],
            ['code' => 'ID', 'name' => 'Indonesia', 'continent_id' => $asia->id, 'currency' => 'IDR'],
            ['code' => 'IR', 'name' => 'Iran', 'continent_id' => $asia->id, 'currency' => 'IRR'],
            ['code' => 'IQ', 'name' => 'Iraq', 'continent_id' => $asia->id, 'currency' => 'IQD'],
            ['code' => 'IL', 'name' => 'Israel', 'continent_id' => $asia->id, 'currency' => 'ILS'],
            ['code' => 'JO', 'name' => 'Jordan', 'continent_id' => $asia->id, 'currency' => 'JOD'],
            ['code' => 'KZ', 'name' => 'Kazakhstan', 'continent_id' => $asia->id, 'currency' => 'KZT'],
            ['code' => 'KP', 'name' => 'South Korea', 'continent_id' => $asia->id, 'currency' => 'KRW'],
            ['code' => 'KR', 'name' => 'North Korea', 'continent_id' => $asia->id, 'currency' => 'KPW'],
            ['code' => 'KW', 'name' => 'Kuwait', 'continent_id' => $asia->id, 'currency' => 'KWD'],
            ['code' => 'KG', 'name' => 'Kyrgyzstan', 'continent_id' => $asia->id, 'currency' => 'KGS'],
            ['code' => 'LB', 'name' => 'Lebanon', 'continent_id' => $asia->id, 'currency' => 'LBP'],
            ['code' => 'MO', 'name' => 'Macau', 'continent_id' => $asia->id, 'currency' => 'MOP'],
            ['code' => 'MY', 'name' => 'Malaysia', 'continent_id' => $asia->id, 'currency' => 'MYR'],
            ['code' => 'MV', 'name' => 'Maldives', 'continent_id' => $asia->id, 'currency' => 'MVR'],
            ['code' => 'MM', 'name' => 'Myanmar', 'continent_id' => $asia->id, 'currency' => 'MMK'],
            ['code' => 'MN', 'name' => 'Mongolia', 'continent_id' => $asia->id, 'currency' => 'MNT'],
            ['code' => 'NP', 'name' => 'Nepal', 'continent_id' => $asia->id, 'currency' => 'NPR'],
            ['code' => 'OM', 'name' => 'Oman', 'continent_id' => $asia->id, 'currency' => 'OMR'],
            ['code' => 'PK', 'name' => 'Pakistan', 'continent_id' => $asia->id, 'currency' => 'OMR'],
            ['code' => 'PH', 'name' => 'Philippines', 'continent_id' => $asia->id, 'currency' => 'PHP'],
            ['code' => 'QA', 'name' => 'Qatar', 'continent_id' => $asia->id, 'currency' => 'QAR'],
            ['code' => 'SA', 'name' => 'Saudi Arabia', 'continent_id' => $asia->id, 'currency' => 'SAR'],
            ['code' => 'SG', 'name' => 'Singapore', 'continent_id' => $asia->id, 'currency' => 'SGD'],
            ['code' => 'LK', 'name' => 'Sri Lanka', 'continent_id' => $asia->id, 'currency' => 'LKR'],
            ['code' => 'SY', 'name' => 'Syrian Arab Republic', 'continent_id' => $asia->id, 'currency' => 'SYP'],
            ['code' => 'TW', 'name' => 'Taiwan', 'continent_id' => $asia->id, 'currency' => 'TWD'],
            ['code' => 'TJ', 'name' => 'Tajikistan', 'continent_id' => $asia->id, 'currency' => 'TJS'],
            ['code' => 'TH', 'name' => 'Thailand', 'continent_id' => $asia->id, 'currency' => 'THB'],
            ['code' => 'TR', 'name' => 'Turkey', 'continent_id' => $asia->id, 'currency' => 'GHS'],
            ['code' => 'AE', 'name' => 'United Arab Emirates', 'continent_id' => $asia->id, 'currency' => 'AED'],
            ['code' => 'UZ', 'name' => 'Uzbekistan', 'continent_id' => $asia->id, 'currency' => 'UZS'],
            ['code' => 'VN', 'name' => 'Vietnam', 'continent_id' => $asia->id, 'currency' => 'VND'],
            ['code' => 'YE', 'name' => 'Yemen', 'continent_id' => $asia->id, 'currency' => 'YER'],
        ];

        $australianOceanianCountries = [
            ['code' => 'AU', 'name' => 'Australia', 'continent_id' => $australiaOceania->id, 'currency' => 'AUD'],
            ['code' => 'NZ', 'name' => 'New Zealand', 'continent_id' => $australiaOceania->id, 'currency' => 'NZD'],
            ['code' => 'WS', 'name' => 'Samoa', 'continent_id' => $australiaOceania->id, 'currency' => 'WST'],
        ];

//        $antarticaCountries = [
//            ['code' => 'AQ', 'name' => 'Antarctica', 'continent_id' => $antartica->id, 'currency' => 'GHS'],
//        ];

        DB::table('countries')->insert($africanCountries);
        DB::table('countries')->insert($europeanCountries);
        DB::table('countries')->insert($northAmericanCountries);
        DB::table('countries')->insert($southAmericanCountries);
        DB::table('countries')->insert($asianCountries);
        DB::table('countries')->insert($australianOceanianCountries);

        return self::SUCCESS;
    }
}
