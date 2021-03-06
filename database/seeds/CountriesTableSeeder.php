<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = $this->getCountries();
        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country['Country'],
                'slug' => $country['Slug'],
                'iso2' => $country['ISO2'],
            ]);
        }
    }

    public function getCountries(){
        $json = 
        '[
            {
                "Country": "Finland",
                "Slug": "finland",
                "ISO2": "FI"
            },
            {
                "Country": "Spain",
                "Slug": "spain",
                "ISO2": "ES"
            },
            {
                "Country": "Uganda",
                "Slug": "uganda",
                "ISO2": "UG"
            },
            {
                "Country": "Saint Vincent and the Grenadines",
                "Slug": "saint-vincent-and-the-grenadines",
                "ISO2": "VC"
            },
            {
                "Country": "United Kingdom",
                "Slug": "united-kingdom",
                "ISO2": "GB"
            },
            {
                "Country": "Eswatini",
                "Slug": "eswatini",
                "ISO2": "SZ"
            },
            {
                "Country": "Holy See",
                "Slug": "holy-see",
                "ISO2": "holy-see"
            },
            {
                "Country": "Congo (Kinshasa)",
                "Slug": "congo-kinshasa",
                "ISO2": "CD"
            },
            {
                "Country": "Portugal",
                "Slug": "portugal",
                "ISO2": "PT"
            },
            {
                "Country": "South Sudan",
                "Slug": "south-sudan",
                "ISO2": "SS"
            },
            {
                "Country": "Thailand",
                "Slug": "thailand",
                "ISO2": "TH"
            },
            {
                "Country": "Zimbabwe",
                "Slug": "zimbabwe",
                "ISO2": "ZW"
            },
            {
                "Country": "Andorra",
                "Slug": "andorra",
                "ISO2": "AD"
            },
            {
                "Country": "Antigua and Barbuda",
                "Slug": "antigua-and-barbuda",
                "ISO2": "AG"
            },
            {
                "Country": "Colombia",
                "Slug": "colombia",
                "ISO2": "CO"
            },
            {
                "Country": "Kenya",
                "Slug": "kenya",
                "ISO2": "KE"
            },
            {
                "Country": "Mali",
                "Slug": "mali",
                "ISO2": "ML"
            },
            {
                "Country": "Monaco",
                "Slug": "monaco",
                "ISO2": "MC"
            },
            {
                "Country": "Zambia",
                "Slug": "zambia",
                "ISO2": "ZM"
            },
            {
                "Country": "Bahrain",
                "Slug": "bahrain",
                "ISO2": "BH"
            },
            {
                "Country": "Haiti",
                "Slug": "haiti",
                "ISO2": "HT"
            },
            {
                "Country": "Mongolia",
                "Slug": "mongolia",
                "ISO2": "MN"
            },
            {
                "Country": "Qatar",
                "Slug": "qatar",
                "ISO2": "QA"
            },
            {
                "Country": "Vietnam",
                "Slug": "vietnam",
                "ISO2": "VN"
            },
            {
                "Country": "Botswana",
                "Slug": "botswana",
                "ISO2": "BW"
            },
            {
                "Country": "West Bank and Gaza",
                "Slug": "west-bank-and-gaza",
                "ISO2": "west-bank-and-gaza"
            },
            {
                "Country": "Hungary",
                "Slug": "hungary",
                "ISO2": "HU"
            },
            {
                "Country": "Norway",
                "Slug": "norway",
                "ISO2": "NO"
            },
            {
                "Country": "Greece",
                "Slug": "greece",
                "ISO2": "GR"
            },
            {
                "Country": "Italy",
                "Slug": "italy",
                "ISO2": "IT"
            },
            {
                "Country": "Moldova",
                "Slug": "moldova",
                "ISO2": "MD"
            },
            {
                "Country": "Indonesia",
                "Slug": "indonesia",
                "ISO2": "ID"
            },
            {
                "Country": "Mauritius",
                "Slug": "mauritius",
                "ISO2": "MU"
            },
            {
                "Country": "Switzerland",
                "Slug": "switzerland",
                "ISO2": "CH"
            },
            {
                "Country": "India",
                "Slug": "india",
                "ISO2": "IN"
            },
            {
                "Country": "Russia",
                "Slug": "russia",
                "ISO2": "RU"
            },
            {
                "Country": "Barbados",
                "Slug": "barbados",
                "ISO2": "BB"
            },
            {
                "Country": "Denmark",
                "Slug": "denmark",
                "ISO2": "DK"
            },
            {
                "Country": "Guinea-Bissau",
                "Slug": "guinea-bissau",
                "ISO2": "GW"
            },
            {
                "Country": "New Zealand",
                "Slug": "new-zealand",
                "ISO2": "NZ"
            },
            {
                "Country": "Namibia",
                "Slug": "namibia",
                "ISO2": "NA"
            },
            {
                "Country": "South Africa",
                "Slug": "south-africa",
                "ISO2": "ZA"
            },
            {
                "Country": "Suriname",
                "Slug": "suriname",
                "ISO2": "SR"
            },
            {
                "Country": "Canada",
                "Slug": "canada",
                "ISO2": "CA"
            },
            {
                "Country": "Rwanda",
                "Slug": "rwanda",
                "ISO2": "RW"
            },
            {
                "Country": "Lithuania",
                "Slug": "lithuania",
                "ISO2": "LT"
            },
            {
                "Country": "Paraguay",
                "Slug": "paraguay",
                "ISO2": "PY"
            },
            {
                "Country": "Sudan",
                "Slug": "sudan",
                "ISO2": "SD"
            },
            {
                "Country": "Timor-Leste",
                "Slug": "timor-leste",
                "ISO2": "TL"
            },
            {
                "Country": "Mauritania",
                "Slug": "mauritania",
                "ISO2": "MR"
            },
            {
                "Country": "Albania",
                "Slug": "albania",
                "ISO2": "AL"
            },
            {
                "Country": "France",
                "Slug": "france",
                "ISO2": "FR"
            },
            {
                "Country": "Jamaica",
                "Slug": "jamaica",
                "ISO2": "JM"
            },
            {
                "Country": "Belize",
                "Slug": "belize",
                "ISO2": "BZ"
            },
            {
                "Country": "Central African Republic",
                "Slug": "central-african-republic",
                "ISO2": "CF"
            },
            {
                "Country": "Malta",
                "Slug": "malta",
                "ISO2": "MT"
            },
            {
                "Country": "Georgia",
                "Slug": "georgia",
                "ISO2": "GE"
            },
            {
                "Country": "Singapore",
                "Slug": "singapore",
                "ISO2": "SG"
            },
            {
                "Country": "Yemen",
                "Slug": "yemen",
                "ISO2": "YE"
            },
            {
                "Country": "Turkey",
                "Slug": "turkey",
                "ISO2": "TR"
            },
            {
                "Country": "Benin",
                "Slug": "benin",
                "ISO2": "BJ"
            },
            {
                "Country": "Honduras",
                "Slug": "honduras",
                "ISO2": "HN"
            },
            {
                "Country": "Israel",
                "Slug": "israel",
                "ISO2": "IL"
            },
            {
                "Country": "Mexico",
                "Slug": "mexico",
                "ISO2": "MX"
            },
            {
                "Country": "Burkina Faso",
                "Slug": "burkina-faso",
                "ISO2": "BF"
            },
            {
                "Country": "Ecuador",
                "Slug": "ecuador",
                "ISO2": "EC"
            },
            {
                "Country": "Syria",
                "Slug": "syria",
                "ISO2": "SY"
            },
            {
                "Country": "Kazakhstan",
                "Slug": "kazakhstan",
                "ISO2": "KZ"
            },
            {
                "Country": "Kyrgyzstan",
                "Slug": "kyrgyzstan",
                "ISO2": "KG"
            },
            {
                "Country": "Liechtenstein",
                "Slug": "liechtenstein",
                "ISO2": "LI"
            },
            {
                "Country": "Sao Tome and Principe",
                "Slug": "sao-tome-and-principe",
                "ISO2": "ST"
            },
            {
                "Country": "Diamond Princess",
                "Slug": "diamond-princess",
                "ISO2": "ST"
            },
            {
                "Country": "Brunei",
                "Slug": "brunei",
                "ISO2": "BN"
            },
            {
                "Country": "Burma",
                "Slug": "burma",
                "ISO2": "BU"
            },
            {
                "Country": "Croatia",
                "Slug": "croatia",
                "ISO2": "HR"
            },
            {
                "Country": "Comoros",
                "Slug": "comoros",
                "ISO2": "KM"
            },
            {
                "Country": "Cuba",
                "Slug": "cuba",
                "ISO2": "CU"
            },
            {
                "Country": "Uzbekistan",
                "Slug": "uzbekistan",
                "ISO2": "UZ"
            },
            {
                "Country": "Cambodia",
                "Slug": "cambodia",
                "ISO2": "KH"
            },
            {
                "Country": "Grenada",
                "Slug": "grenada",
                "ISO2": "GD"
            },
            {
                "Country": "Slovakia",
                "Slug": "slovakia",
                "ISO2": "SK"
            },
            {
                "Country": "Dominican Republic",
                "Slug": "dominican-republic",
                "ISO2": "DO"
            },
            {
                "Country": "Fiji",
                "Slug": "fiji",
                "ISO2": "FJ"
            },
            {
                "Country": "Malaysia",
                "Slug": "malaysia",
                "ISO2": "MY"
            },
            {
                "Country": "Tajikistan",
                "Slug": "tajikistan",
                "ISO2": "TJ"
            },
            {
                "Country": "Uruguay",
                "Slug": "uruguay",
                "ISO2": "UY"
            },
            {
                "Country": "Afghanistan",
                "Slug": "afghanistan",
                "ISO2": "AF"
            },
            {
                "Country": "Iraq",
                "Slug": "iraq",
                "ISO2": "IQ"
            },
            {
                "Country": "Laos",
                "Slug": "lao-pdr",
                "ISO2": "LA"
            },
            {
                "Country": "MS Zaandam",
                "Slug": "ms-zaandam",
                "ISO2": "ms-zaandam"
            },
            {
                "Country": "Algeria",
                "Slug": "algeria",
                "ISO2": "DZ"
            },
            {
                "Country": "Nicaragua",
                "Slug": "nicaragua",
                "ISO2": "NI"
            },
            {
                "Country": "Tanzania",
                "Slug": "tanzania",
                "ISO2": "TZ"
            },
            {
                "Country": "Angola",
                "Slug": "angola",
                "ISO2": "AO"
            },
            {
                "Country": "Burundi",
                "Slug": "burundi",
                "ISO2": "BI"
            },
            {
                "Country": "Slovenia",
                "Slug": "slovenia",
                "ISO2": "SI"
            },
            {
                "Country": "United Arab Emirates",
                "Slug": "united-arab-emirates",
                "ISO2": "AE"
            },
            {
                "Country": "Czechia",
                "Slug": "czech-republic",
                "ISO2": "CZ"
            },
            {
                "Country": "Guinea",
                "Slug": "guinea",
                "ISO2": "GN"
            },
            {
                "Country": "Luxembourg",
                "Slug": "luxembourg",
                "ISO2": "LU"
            },
            {
                "Country": "Ukraine",
                "Slug": "ukraine",
                "ISO2": "UA"
            },
            {
                "Country": "Bosnia and Herzegovina",
                "Slug": "bosnia-and-herzegovina",
                "ISO2": "BA"
            },
            {
                "Country": "Bulgaria",
                "Slug": "bulgaria",
                "ISO2": "BG"
            },
            {
                "Country": "Congo (Brazzaville)",
                "Slug": "congo-brazzaville",
                "ISO2": "CG"
            },
            {
                "Country": "Nepal",
                "Slug": "nepal",
                "ISO2": "NP"
            },
            {
                "Country": "Western Sahara",
                "Slug": "western-sahara",
                "ISO2": "EH"
            },
            {
                "Country": "Australia",
                "Slug": "australia",
                "ISO2": "AU"
            },
            {
                "Country": "Mozambique",
                "Slug": "mozambique",
                "ISO2": "MZ"
            },
            {
                "Country": "Belarus",
                "Slug": "belarus",
                "ISO2": "BY"
            },
            {
                "Country": "Saint Lucia",
                "Slug": "saint-lucia",
                "ISO2": "LC"
            },
            {
                "Country": "Senegal",
                "Slug": "senegal",
                "ISO2": "SN"
            },
            {
                "Country": "Trinidad and Tobago",
                "Slug": "trinidad-and-tobago",
                "ISO2": "TT"
            },
            {
                "Country": "Bangladesh",
                "Slug": "bangladesh",
                "ISO2": "BD"
            },
            {
                "Country": "Equatorial Guinea",
                "Slug": "equatorial-guinea",
                "ISO2": "GQ"
            },
            {
                "Country": "Guyana",
                "Slug": "guyana",
                "ISO2": "GY"
            },
            {
                "Country": "Libya",
                "Slug": "libya",
                "ISO2": "LY"
            },
            {
                "Country": "Egypt",
                "Slug": "egypt",
                "ISO2": "EG"
            },
            {
                "Country": "Saint Kitts and Nevis",
                "Slug": "saint-kitts-and-nevis",
                "ISO2": "KN"
            },
            {
                "Country": "Sierra Leone",
                "Slug": "sierra-leone",
                "ISO2": "SL"
            },
            {
                "Country": "Chile",
                "Slug": "chile",
                "ISO2": "CL"
            },
            {
                "Country": "Djibouti",
                "Slug": "djibouti",
                "ISO2": "DJ"
            },
            {
                "Country": "Liberia",
                "Slug": "liberia",
                "ISO2": "LR"
            },
            {
                "Country": "Oman",
                "Slug": "oman",
                "ISO2": "OM"
            },
            {
                "Country": "Gambia",
                "Slug": "gambia",
                "ISO2": "GM"
            },
            {
                "Country": "Saudi Arabia",
                "Slug": "saudi-arabia",
                "ISO2": "SA"
            },
            {
                "Country": "Dominica",
                "Slug": "dominica",
                "ISO2": "DM"
            },
            {
                "Country": "Eritrea",
                "Slug": "eritrea",
                "ISO2": "ER"
            },
            {
                "Country": "Estonia",
                "Slug": "estonia",
                "ISO2": "EE"
            },
            {
                "Country": "Argentina",
                "Slug": "argentina",
                "ISO2": "AR"
            },
            {
                "Country": "Brazil",
                "Slug": "brazil",
                "ISO2": "BR"
            },
            {
                "Country": "Latvia",
                "Slug": "latvia",
                "ISO2": "LV"
            },
            {
                "Country": "Somalia",
                "Slug": "somalia",
                "ISO2": "SO"
            },
            {
                "Country": "Armenia",
                "Slug": "armenia",
                "ISO2": "AM"
            },
            {
                "Country": "Japan",
                "Slug": "japan",
                "ISO2": "JP"
            },
            {
                "Country": "North Macedonia",
                "Slug": "macedonia",
                "ISO2": "MK"
            },
            {
                "Country": "Pakistan",
                "Slug": "pakistan",
                "ISO2": "PK"
            },
            {
                "Country": "Seychelles",
                "Slug": "seychelles",
                "ISO2": "SC"
            },
            {
                "Country": "Tunisia",
                "Slug": "tunisia",
                "ISO2": "TN"
            },
            {
                "Country": "Bolivia",
                "Slug": "bolivia",
                "ISO2": "BO"
            },
            {
                "Country": "Malawi",
                "Slug": "malawi",
                "ISO2": "MW"
            },
            {
                "Country": "Papua New Guinea",
                "Slug": "papua-new-guinea",
                "ISO2": "PG"
            },
            {
                "Country": "Bahamas",
                "Slug": "bahamas",
                "ISO2": "BS"
            },
            {
                "Country": "Costa Rica",
                "Slug": "costa-rica",
                "ISO2": "CR"
            },
            {
                "Country": "Ethiopia",
                "Slug": "ethiopia",
                "ISO2": "ET"
            },
            {
                "Country": "Lebanon",
                "Slug": "lebanon",
                "ISO2": "LB"
            },
            {
                "Country": "Taiwan*",
                "Slug": "taiwan",
                "ISO2": "TW"
            },
            {
                "Country": "Austria",
                "Slug": "austria",
                "ISO2": "AT"
            },
            {
                "Country": "Morocco",
                "Slug": "morocco",
                "ISO2": "MA"
            },
            {
                "Country": "Bhutan",
                "Slug": "bhutan",
                "ISO2": "BT"
            },
            {
                "Country": "Cabo Verde",
                "Slug": "cape-verde",
                "ISO2": "CV"
            },
            {
                "Country": "Venezuela",
                "Slug": "venezuela",
                "ISO2": "VE"
            },
            {
                "Country": "Montenegro",
                "Slug": "montenegro",
                "ISO2": "ME"
            },
            {
                "Country": "Sweden",
                "Slug": "sweden",
                "ISO2": "SE"
            },
            {
                "Country": "Azerbaijan",
                "Slug": "azerbaijan",
                "ISO2": "AZ"
            },
            {
                "Country": "Jordan",
                "Slug": "jordan",
                "ISO2": "JO"
            },
            {
                "Country": "Nigeria",
                "Slug": "nigeria",
                "ISO2": "NG"
            },
            {
                "Country": "Cameroon",
                "Slug": "cameroon",
                "ISO2": "CM"
            },
            {
                "Country": "Korea, South",
                "Slug": "korea-south",
                "ISO2": "KR"
            },
            {
                "Country": "Peru",
                "Slug": "peru",
                "ISO2": "PE"
            },
            {
                "Country": "Serbia",
                "Slug": "serbia",
                "ISO2": "RS"
            },
            {
                "Country": "Guatemala",
                "Slug": "guatemala",
                "ISO2": "GT"
            },
            {
                "Country": "Iceland",
                "Slug": "iceland",
                "ISO2": "IS"
            },
            {
                "Country": "Sri Lanka",
                "Slug": "sri-lanka",
                "ISO2": "LK"
            },
            {
                "Country": "China",
                "Slug": "china",
                "ISO2": "CN"
            },
            {
                "Country": "Gabon",
                "Slug": "gabon",
                "ISO2": "GA"
            },
            {
                "Country": "Netherlands",
                "Slug": "netherlands",
                "ISO2": "NL"
            },
            {
                "Country": "Romania",
                "Slug": "romania",
                "ISO2": "RO"
            },
            {
                "Country": "US",
                "Slug": "united-states",
                "ISO2": "US"
            },
            {
                "Country": "Poland",
                "Slug": "poland",
                "ISO2": "PL"
            },
            {
                "Country": "San Marino",
                "Slug": "san-marino",
                "ISO2": "SM"
            },
            {
                "Country": "Kosovo",
                "Slug": "kosovo",
                "ISO2": "XK"
            },
            {
                "Country": "Togo",
                "Slug": "togo",
                "ISO2": "TG"
            },
            {
                "Country": "Cote d Ivoire",
                "Slug": "cote-divoire",
                "ISO2": "CI"
            },
            {
                "Country": "Ghana",
                "Slug": "ghana",
                "ISO2": "GH"
            },
            {
                "Country": "Kuwait",
                "Slug": "kuwait",
                "ISO2": "KW"
            },
            {
                "Country": "Maldives",
                "Slug": "maldives",
                "ISO2": "MV"
            },
            {
                "Country": "Ireland",
                "Slug": "ireland",
                "ISO2": "IE"
            },
            {
                "Country": "Philippines",
                "Slug": "philippines",
                "ISO2": "PH"
            },
            {
                "Country": "Chad",
                "Slug": "chad",
                "ISO2": "TD"
            },
            {
                "Country": "Cyprus",
                "Slug": "cyprus",
                "ISO2": "CY"
            },
            {
                "Country": "Panama",
                "Slug": "panama",
                "ISO2": "PA"
            },
            {
                "Country": "Lesotho",
                "Slug": "lesotho",
                "ISO2": "LS"
            },
            {
                "Country": "Niger",
                "Slug": "niger",
                "ISO2": "NE"
            },
            {
                "Country": "Belgium",
                "Slug": "belgium",
                "ISO2": "BE"
            },
            {
                "Country": "El Salvador",
                "Slug": "el-salvador",
                "ISO2": "SV"
            },
            {
                "Country": "Germany",
                "Slug": "germany",
                "ISO2": "DE"
            },
            {
                "Country": "Iran",
                "Slug": "iran",
                "ISO2": "IR"
            },
            {
                "Country": "Madagascar",
                "Slug": "madagascar",
                "ISO2": "MG"
            }
        ]';

        return json_decode($json, true);
    }
}
