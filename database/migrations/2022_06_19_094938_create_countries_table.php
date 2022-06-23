<?php

use App\Models\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name_fa');
            $table->string('name_en');
            $table->string('alpha_2_code', 2)
                ->unique();
        });

        $this->initDateCountries();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }

    private function initDateCountries(): void
    {
        $countries = [
            [
                'name_fa'      => 'ایران',
                'name_en'      => 'Iran',
                'alpha_2_code' => 'IR',
            ],
            [
                'name_fa'      => 'افغانستان',
                'name_en'      => 'Afghanistan',
                'alpha_2_code' => 'AF',
            ],
            [
                'name_fa'      => 'آلبانی',
                'name_en'      => 'Albania',
                'alpha_2_code' => 'AL',
            ],
            [
                'name_fa'      => 'الجزایر',
                'name_en'      => 'Algeria',
                'alpha_2_code' => 'DZ',
            ],
            [
                'name_fa'      => 'ساموای آمریکا',
                'name_en'      => 'American Samoa',
                'alpha_2_code' => 'AS',
            ],
            [
                'name_fa'      => 'آندورا',
                'name_en'      => 'Andorra',
                'alpha_2_code' => 'AD',
            ],
            [
                'name_fa'      => 'آنگولا',
                'name_en'      => 'Angola',
                'alpha_2_code' => 'AO',
            ],
            [
                'name_fa'      => 'آنگویلا',
                'name_en'      => 'Anguilla',
                'alpha_2_code' => 'AI',
            ],
            [
                'name_fa'      => 'جنوبگان',
                'name_en'      => 'Antarctica',
                'alpha_2_code' => 'AQ',
            ],
            [
                'name_fa'      => 'آنتیگوا و باربودا',
                'name_en'      => 'Antigua and Barbuda',
                'alpha_2_code' => 'AG',
            ],
            [
                'name_fa'      => 'آرژانتین',
                'name_en'      => 'Argentina',
                'alpha_2_code' => 'AR',
            ],
            [
                'name_fa'      => 'ارمنستان',
                'name_en'      => 'Armenia',
                'alpha_2_code' => 'AM',
            ],
            [
                'name_fa'      => 'آروبا',
                'name_en'      => 'Aruba',
                'alpha_2_code' => 'AW',
            ],
            [
                'name_fa'      => 'استرالیا',
                'name_en'      => 'Australia',
                'alpha_2_code' => 'AU',
            ],
            [
                'name_fa'      => 'اتریش',
                'name_en'      => 'Austria',
                'alpha_2_code' => 'AT',
            ],
            [
                'name_fa'      => 'جمهوری آذربایجان',
                'name_en'      => 'Azerbaijan',
                'alpha_2_code' => 'AZ',
            ],
            [
                'name_fa'      => 'باهاما',
                'name_en'      => 'Bahamas',
                'alpha_2_code' => 'BS',
            ],
            [
                'name_fa'      => 'بحرین',
                'name_en'      => 'Bahrain',
                'alpha_2_code' => 'BH',
            ],
            [
                'name_fa'      => 'بنگلادش',
                'name_en'      => 'Bangladesh',
                'alpha_2_code' => 'BD',
            ],
            [
                'name_fa'      => 'باربادوس',
                'name_en'      => 'Barbados',
                'alpha_2_code' => 'BB',
            ],
            [
                'name_fa'      => 'بلاروس',
                'name_en'      => 'Belarus',
                'alpha_2_code' => 'BY',
            ],
            [
                'name_fa'      => 'بلژیک',
                'name_en'      => 'Belgium',
                'alpha_2_code' => 'BE',
            ],
            [
                'name_fa'      => 'بلیز',
                'name_en'      => 'Belize',
                'alpha_2_code' => 'BZ',
            ],
            [
                'name_fa'      => 'بنین',
                'name_en'      => 'Benin',
                'alpha_2_code' => 'BJ',
            ],
            [
                'name_fa'      => 'برمودا',
                'name_en'      => 'Bermuda',
                'alpha_2_code' => 'BM',
            ],
            [
                'name_fa'      => 'پادشاهی بوتان',
                'name_en'      => 'Bhutan',
                'alpha_2_code' => 'BT',
            ],
            [
                'name_fa'      => 'بولیوی',
                'name_en'      => 'Bolivia',
                'alpha_2_code' => 'BO',
            ],
            [
                'name_fa'      => 'بوسنی و هرزگوین',
                'name_en'      => 'Bosnia and Herzegovina',
                'alpha_2_code' => 'BA',
            ],
            [
                'name_fa'      => 'بوتسوانا',
                'name_en'      => 'Botswana',
                'alpha_2_code' => 'BW',
            ],
            [
                'name_fa'      => 'جزیره بووه',
                'name_en'      => 'Bouvet Island',
                'alpha_2_code' => 'BV',
            ],
            [
                'name_fa'      => 'برزیل',
                'name_en'      => 'Brazil',
                'alpha_2_code' => 'BR',
            ],
            [
                'name_fa'      => 'قلمرو اقیانوس هند بریتانیا',
                'name_en'      => 'BritishIndian Ocean Territory',
                'alpha_2_code' => 'IO',
            ],
            [
                'name_fa'      => 'برونئی',
                'name_en'      => 'Brunei',
                'alpha_2_code' => 'BN',
            ],
            [
                'name_fa'      => 'بلغارستان',
                'name_en'      => 'Bulgaria',
                'alpha_2_code' => 'BG',
            ],
            [
                'name_fa'      => 'بورکینافاسو',
                'name_en'      => 'Burkina Faso',
                'alpha_2_code' => 'BF',
            ],
            [
                'name_fa'      => 'بوروندی',
                'name_en'      => 'Burundi',
                'alpha_2_code' => 'BI',
            ],
            [
                'name_fa'      => 'کامبوج',
                'name_en'      => 'Cambodia',
                'alpha_2_code' => 'KH',
            ],
            [
                'name_fa'      => 'کامرون',
                'name_en'      => 'Cameroon',
                'alpha_2_code' => 'CM',
            ],
            [
                'name_fa'      => 'کانادا',
                'name_en'      => 'Canada',
                'alpha_2_code' => 'CA',
            ],
            [
                'name_fa'      => 'کیپ ورد',
                'name_en'      => 'Cape Verde',
                'alpha_2_code' => 'CV',
            ],
            [
                'name_fa'      => 'جزایر کیمن',
                'name_en'      => 'Cayman Islands',
                'alpha_2_code' => 'KY',
            ],
            [
                'name_fa'      => 'جمهوری آفریقای مرکزی',
                'name_en'      => 'Central AfricanRepublic',
                'alpha_2_code' => 'CF',
            ],
            [
                'name_fa'      => 'چاد',
                'name_en'      => 'Chad',
                'alpha_2_code' => 'TD',
            ],
            [
                'name_fa'      => 'شیلی',
                'name_en'      => 'Chile',
                'alpha_2_code' => 'CL',
            ],
            [
                'name_fa'      => 'چین',
                'name_en'      => 'China',
                'alpha_2_code' => 'CN',
            ],
            [
                'name_fa'      => 'جزیره کریسمس',
                'name_en'      => 'Christmas Island',
                'alpha_2_code' => 'CX',
            ],
            [
                'name_fa'      => 'جزایر کوکوس',
                'name_en'      => 'Cocos (Keeling) Islands',
                'alpha_2_code' => 'CC',
            ],
            [
                'name_fa'      => 'کلمبیا',
                'name_en'      => 'Colombia',
                'alpha_2_code' => 'CO',
            ],
            [
                'name_fa'      => 'کومور',
                'name_en'      => 'Comoros',
                'alpha_2_code' => 'KM',
            ],
            [
                'name_fa'      => 'جمهوری کنگو',
                'name_en'      => 'Congo',
                'alpha_2_code' => 'CG',
            ],
            [
                'name_fa'      => 'جمهوری دموکراتیک کنگو',
                'name_en'      => 'Congo, theDemocratic Republic of the',
                'alpha_2_code' => 'CD',
            ],
            [
                'name_fa'      => 'جزایر کوک',
                'name_en'      => 'Cook Islands',
                'alpha_2_code' => 'CK',
            ],
            [
                'name_fa'      => 'کاستاریکا',
                'name_en'      => 'Costa Rica',
                'alpha_2_code' => 'CR',
            ],
            [
                'name_fa'      => 'ساحل عاج',
                'name_en'      => 'Ivory Coast',
                'alpha_2_code' => 'CI',
            ],
            [
                'name_fa'      => 'کرواسی',
                'name_en'      => 'Croatia',
                'alpha_2_code' => 'HR',
            ],
            [
                'name_fa'      => 'کوبا',
                'name_en'      => 'Cuba',
                'alpha_2_code' => 'CU',
            ],
            [
                'name_fa'      => 'قبرس',
                'name_en'      => 'Cyprus',
                'alpha_2_code' => 'CY',
            ],
            [
                'name_fa'      => 'جمهوری چک',
                'name_en'      => 'Czech Republic',
                'alpha_2_code' => 'CZ',
            ],
            [
                'name_fa'      => 'دانمارک',
                'name_en'      => 'Denmark',
                'alpha_2_code' => 'DK',
            ],
            [
                'name_fa'      => 'جیبوتی',
                'name_en'      => 'Djibouti',
                'alpha_2_code' => 'DJ',
            ],
            [
                'name_fa'      => 'دومینیکا',
                'name_en'      => 'Dominica',
                'alpha_2_code' => 'DM',
            ],
            [
                'name_fa'      => 'جمهوری دومینیکن',
                'name_en'      => 'Dominican Republic',
                'alpha_2_code' => 'DO',
            ],
            [
                'name_fa'      => 'اکوادور',
                'name_en'      => 'Ecuador',
                'alpha_2_code' => 'EC',
            ],
            [
                'name_fa'      => 'مصر',
                'name_en'      => 'Egypt',
                'alpha_2_code' => 'EG',
            ],
            [
                'name_fa'      => 'السالوادور',
                'name_en'      => 'El Salvador',
                'alpha_2_code' => 'SV',
            ],
            [
                'name_fa'      => 'گینه استوایی',
                'name_en'      => 'Equatorial Guinea',
                'alpha_2_code' => 'GQ',
            ],
            [
                'name_fa'      => 'اریتره',
                'name_en'      => 'Eritrea',
                'alpha_2_code' => 'ER',
            ],
            [
                'name_fa'      => 'استونی',
                'name_en'      => 'Estonia',
                'alpha_2_code' => 'EE',
            ],
            [
                'name_fa'      => 'اتیوپی',
                'name_en'      => 'Ethiopia',
                'alpha_2_code' => 'ET',
            ],
            [
                'name_fa'      => 'جزایر فالکند',
                'name_en'      => 'Falkland Islands (Malvinas)',
                'alpha_2_code' => 'FK',
            ],
            [
                'name_fa'      => 'جزایر فارو',
                'name_en'      => 'Faroe Islands',
                'alpha_2_code' => 'FO',
            ],
            [
                'name_fa'      => 'فیجی',
                'name_en'      => 'Fiji',
                'alpha_2_code' => 'FJ',
            ],
            [
                'name_fa'      => 'فنلاند',
                'name_en'      => 'Finland',
                'alpha_2_code' => 'FI',
            ],
            [
                'name_fa'      => 'فرانسه',
                'name_en'      => 'France',
                'alpha_2_code' => 'FR',
            ],
            [
                'name_fa'      => 'گویان فرانسه',
                'name_en'      => 'French Guiana',
                'alpha_2_code' => 'GF',
            ],
            [
                'name_fa'      => 'پولی‌نزی فرانسه',
                'name_en'      => 'French Polynesia',
                'alpha_2_code' => 'PF',
            ],
            [
                'name_fa'      => 'سرزمین‌های قطب جنوب و جنوبی فرانسه',
                'name_en'      => 'French Southern Territories',
                'alpha_2_code' => 'TF',
            ],
            [
                'name_fa'      => 'گابون',
                'name_en'      => 'Gabon',
                'alpha_2_code' => 'GA',
            ],
            [
                'name_fa'      => 'گامبیا',
                'name_en'      => 'Gambia',
                'alpha_2_code' => 'GM',
            ],
            [
                'name_fa'      => 'گرجستان',
                'name_en'      => 'Georgia',
                'alpha_2_code' => 'GE',
            ],
            [
                'name_fa'      => 'آلمان',
                'name_en'      => 'Germany',
                'alpha_2_code' => 'DE',
            ],
            [
                'name_fa'      => 'غنا',
                'name_en'      => 'Ghana',
                'alpha_2_code' => 'GH',
            ],
            [
                'name_fa'      => 'جبل طارق',
                'name_en'      => 'Gibraltar',
                'alpha_2_code' => 'GI',
            ],
            [
                'name_fa'      => 'یونان',
                'name_en'      => 'Greece',
                'alpha_2_code' => 'GR',
            ],
            [
                'name_fa'      => 'گرینلند',
                'name_en'      => 'Greenland',
                'alpha_2_code' => 'GL',
            ],
            [
                'name_fa'      => 'گرنادا',
                'name_en'      => 'Grenada',
                'alpha_2_code' => 'GD',
            ],
            [
                'name_fa'      => 'جزیره گوادلوپ',
                'name_en'      => 'Guadeloupe',
                'alpha_2_code' => 'GP',
            ],
            [
                'name_fa'      => 'گوآم',
                'name_en'      => 'Guam',
                'alpha_2_code' => 'GU',
            ],
            [
                'name_fa'      => 'گواتمالا',
                'name_en'      => 'Guatemala',
                'alpha_2_code' => 'GT',
            ],
            [
                'name_fa'      => 'گرنزی',
                'name_en'      => 'Guernsey',
                'alpha_2_code' => 'GG',
            ],
            [
                'name_fa'      => 'گینه',
                'name_en'      => 'Guinea',
                'alpha_2_code' => 'GN',
            ],
            [
                'name_fa'      => 'گینه بیسائو',
                'name_en'      => 'Guinea-Bissau',
                'alpha_2_code' => 'GW',
            ],
            [
                'name_fa'      => 'گویان',
                'name_en'      => 'Guyana',
                'alpha_2_code' => 'GY',
            ],
            [
                'name_fa'      => 'هائیتی',
                'name_en'      => 'Haiti',
                'alpha_2_code' => 'HT',
            ],
            [
                'name_fa'      => 'جزیره هرد و جزایر مک‌دونالد',
                'name_en'      => 'HeardIsland and McDonald Islands',
                'alpha_2_code' => 'HM',
            ],
            [
                'name_fa'      => 'واتیکان',
                'name_en'      => 'Holy See (Vatican City State)',
                'alpha_2_code' => 'VA',
            ],
            [
                'name_fa'      => 'هندوراس',
                'name_en'      => 'Honduras',
                'alpha_2_code' => 'HN',
            ],
            [
                'name_fa'      => 'هنگ کنگ',
                'name_en'      => 'Hong Kong',
                'alpha_2_code' => 'HK',
            ],
            [
                'name_fa'      => 'مجارستان',
                'name_en'      => 'Hungary',
                'alpha_2_code' => 'HU',
            ],
            [
                'name_fa'      => 'ایسلند',
                'name_en'      => 'Iceland',
                'alpha_2_code' => 'IS',
            ],
            [
                'name_fa'      => 'هند',
                'name_en'      => 'India',
                'alpha_2_code' => 'IN',
            ],
            [
                'name_fa'      => 'اندونزی',
                'name_en'      => 'Indonesia',
                'alpha_2_code' => 'ID',
            ],
            [
                'name_fa'      => 'عراق',
                'name_en'      => 'Iraq',
                'alpha_2_code' => 'IQ',
            ],
            [
                'name_fa'      => 'جمهوری ایرلند',
                'name_en'      => 'Ireland',
                'alpha_2_code' => 'IE',
            ],
            [
                'name_fa'      => 'جزیره من',
                'name_en'      => 'Isle of Man',
                'alpha_2_code' => 'IM',
            ],
            [
                'name_fa'      => 'اسرائیل',
                'name_en'      => 'Israel',
                'alpha_2_code' => 'IL',
            ],
            [
                'name_fa'      => 'ایتالیا',
                'name_en'      => 'Italy',
                'alpha_2_code' => 'IT',
            ],
            [
                'name_fa'      => 'جامائیکا',
                'name_en'      => 'Jamaica',
                'alpha_2_code' => 'JM',
            ],
            [
                'name_fa'      => 'ژاپن',
                'name_en'      => 'Japan',
                'alpha_2_code' => 'JP',
            ],
            [
                'name_fa'      => 'جرسی',
                'name_en'      => 'Jersey',
                'alpha_2_code' => 'JE',
            ],
            [
                'name_fa'      => 'اردن',
                'name_en'      => 'Jordan',
                'alpha_2_code' => 'JO',
            ],
            [
                'name_fa'      => 'قزاقستان',
                'name_en'      => 'Kazakhstan',
                'alpha_2_code' => 'KZ',
            ],
            [
                'name_fa'      => 'کنیا',
                'name_en'      => 'Kenya',
                'alpha_2_code' => 'KE',
            ],
            [
                'name_fa'      => 'کیریباتی',
                'name_en'      => 'Kiribati',
                'alpha_2_code' => 'KI',
            ],
            [
                'name_fa'      => 'کره شمالی',
                'name_en'      => 'Korea, Democratic People\'sRepublic of',
                'alpha_2_code' => 'KP',
            ],
            [
                'name_fa'      => 'کره جنوبی',
                'name_en'      => 'South Korea',
                'alpha_2_code' => 'KR',
            ],
            [
                'name_fa'      => 'کویت',
                'name_en'      => 'Kuwait',
                'alpha_2_code' => 'KW',
            ],
            [
                'name_fa'      => 'قرقیزستان',
                'name_en'      => 'Kyrgyzstan',
                'alpha_2_code' => 'KG',
            ],
            [
                'name_fa'      => 'لائوس',
                'name_en'      => 'Lao People\'s Democratic Republic',
                'alpha_2_code' => 'LA',
            ],
            [
                'name_fa'      => 'لتونی',
                'name_en'      => 'Latvia',
                'alpha_2_code' => 'LV',
            ],
            [
                'name_fa'      => 'لبنان',
                'name_en'      => 'Lebanon',
                'alpha_2_code' => 'LB',
            ],
            [
                'name_fa'      => 'لسوتو',
                'name_en'      => 'Lesotho',
                'alpha_2_code' => 'LS',
            ],
            [
                'name_fa'      => 'لیبریا',
                'name_en'      => 'Liberia',
                'alpha_2_code' => 'LR',
            ],
            [
                'name_fa'      => 'لیختن‌اشتاین',
                'name_en'      => 'Liechtenstein',
                'alpha_2_code' => 'LI',
            ],
            [
                'name_fa'      => 'لیتوانی',
                'name_en'      => 'Lithuania',
                'alpha_2_code' => 'LT',
            ],
            [
                'name_fa'      => 'لوکزامبورگ',
                'name_en'      => 'Luxembourg',
                'alpha_2_code' => 'LU',
            ],
            [
                'name_fa'      => 'ماکائو',
                'name_en'      => 'Macao',
                'alpha_2_code' => 'MO',
            ],
            [
                'name_fa'      => 'مقدونیه',
                'name_en'      => 'Macedonia, the former YugoslavRepublic of',
                'alpha_2_code' => 'MK',
            ],
            [
                'name_fa'      => 'ماداگاسکار',
                'name_en'      => 'Madagascar',
                'alpha_2_code' => 'MG',
            ],
            [
                'name_fa'      => 'مالاوی',
                'name_en'      => 'Malawi',
                'alpha_2_code' => 'MW',
            ],
            [
                'name_fa'      => 'مالزی',
                'name_en'      => 'Malaysia',
                'alpha_2_code' => 'MY',
            ],
            [
                'name_fa'      => 'مالدیو',
                'name_en'      => 'Maldives',
                'alpha_2_code' => 'MV',
            ],
            [
                'name_fa'      => 'مالی',
                'name_en'      => 'Mali',
                'alpha_2_code' => 'ML',
            ],
            [
                'name_fa'      => 'مالت',
                'name_en'      => 'Malta',
                'alpha_2_code' => 'MT',
            ],
            [
                'name_fa'      => 'جزایر مارشال',
                'name_en'      => 'Marshall Islands',
                'alpha_2_code' => 'MH',
            ],
            [
                'name_fa'      => 'مارتینیک',
                'name_en'      => 'Martinique',
                'alpha_2_code' => 'MQ',
            ],
            [
                'name_fa'      => 'موریتانی',
                'name_en'      => 'Mauritania',
                'alpha_2_code' => 'MR',
            ],
            [
                'name_fa'      => 'موریس',
                'name_en'      => 'Mauritius',
                'alpha_2_code' => 'MU',
            ],
            [
                'name_fa'      => 'مایوت',
                'name_en'      => 'Mayotte',
                'alpha_2_code' => 'YT',
            ],
            [
                'name_fa'      => 'مکزیک',
                'name_en'      => 'Mexico',
                'alpha_2_code' => 'MX',
            ],
            [
                'name_fa'      => 'ایالات فدرال میکرونزی',
                'name_en'      => 'Micronesia,Federated States of',
                'alpha_2_code' => 'FM',
            ],
            [
                'name_fa'      => 'مولداوی',
                'name_en'      => 'Moldova, Republic of',
                'alpha_2_code' => 'MD',
            ],
            [
                'name_fa'      => 'موناکو',
                'name_en'      => 'Monaco',
                'alpha_2_code' => 'MC',
            ],
            [
                'name_fa'      => 'مغولستان',
                'name_en'      => 'Mongolia',
                'alpha_2_code' => 'MN',
            ],
            [
                'name_fa'      => 'مونته‌نگرو',
                'name_en'      => 'Montenegro',
                'alpha_2_code' => 'ME',
            ],
            [
                'name_fa'      => 'مونتسرات',
                'name_en'      => 'Montserrat',
                'alpha_2_code' => 'MS',
            ],
            [
                'name_fa'      => 'مراکش',
                'name_en'      => 'Morocco',
                'alpha_2_code' => 'MA',
            ],
            [
                'name_fa'      => 'موزامبیک',
                'name_en'      => 'Mozambique',
                'alpha_2_code' => 'MZ',
            ],
            [
                'name_fa'      => 'میانمار',
                'name_en'      => 'Burma',
                'alpha_2_code' => 'MM',
            ],
            [
                'name_fa'      => 'نامیبیا',
                'name_en'      => 'Namibia',
                'alpha_2_code' => 'NA',
            ],
            [
                'name_fa'      => 'نائورو',
                'name_en'      => 'Nauru',
                'alpha_2_code' => 'NR',
            ],
            [
                'name_fa'      => 'نپال',
                'name_en'      => 'Nepal',
                'alpha_2_code' => 'NP',
            ],
            [
                'name_fa'      => 'هلند',
                'name_en'      => 'Netherlands',
                'alpha_2_code' => 'NL',
            ],
            [
                'name_fa'      => 'آنتیل هلند',
                'name_en'      => 'Netherlands Antilles',
                'alpha_2_code' => 'AN',
            ],
            [
                'name_fa'      => 'کالدونیای جدید',
                'name_en'      => 'New Caledonia',
                'alpha_2_code' => 'NC',
            ],
            [
                'name_fa'      => 'نیوزیلند',
                'name_en'      => 'New Zealand',
                'alpha_2_code' => 'NZ',
            ],
            [
                'name_fa'      => 'نیکاراگوئه',
                'name_en'      => 'Nicaragua',
                'alpha_2_code' => 'NI',
            ],
            [
                'name_fa'      => 'نیجر',
                'name_en'      => 'Niger',
                'alpha_2_code' => 'NE',
            ],
            [
                'name_fa'      => 'نیجریه',
                'name_en'      => 'Nigeria',
                'alpha_2_code' => 'NG',
            ],
            [
                'name_fa'      => 'نیووی',
                'name_en'      => 'Niue',
                'alpha_2_code' => 'NU',
            ],
            [
                'name_fa'      => 'جزیره نورفولک',
                'name_en'      => 'Norfolk Island',
                'alpha_2_code' => 'NF',
            ],
            [
                'name_fa'      => 'جزایر ماریانای شمالی',
                'name_en'      => 'Northern MarianaIslands',
                'alpha_2_code' => 'MP',
            ],
            [
                'name_fa'      => 'نروژ',
                'name_en'      => 'Norway',
                'alpha_2_code' => 'NO',
            ],
            [
                'name_fa'      => 'عمان',
                'name_en'      => 'Oman',
                'alpha_2_code' => 'OM',
            ],
            [
                'name_fa'      => 'پاکستان',
                'name_en'      => 'Pakistan',
                'alpha_2_code' => 'PK',
            ],
            [
                'name_fa'      => 'پالائو',
                'name_en'      => 'Palau',
                'alpha_2_code' => 'PW',
            ],
            [
                'name_fa'      => 'فلسطین',
                'name_en'      => 'Palestinian Territory, Occupied',
                'alpha_2_code' => 'PS',
            ],
            [
                'name_fa'      => 'پاناما',
                'name_en'      => 'Panama',
                'alpha_2_code' => 'PA',
            ],
            [
                'name_fa'      => 'پاپوآ گینه نو',
                'name_en'      => 'Papua New Guinea',
                'alpha_2_code' => 'PG',
            ],
            [
                'name_fa'      => 'پاراگوئه',
                'name_en'      => 'Paraguay',
                'alpha_2_code' => 'PY',
            ],
            [
                'name_fa'      => 'پرو',
                'name_en'      => 'Peru',
                'alpha_2_code' => 'PE',
            ],
            [
                'name_fa'      => 'فیلیپین',
                'name_en'      => 'Philippines',
                'alpha_2_code' => 'PH',
            ],
            [
                'name_fa'      => 'جزایر پیت‌کرن',
                'name_en'      => 'Pitcairn',
                'alpha_2_code' => 'PN',
            ],
            [
                'name_fa'      => 'لهستان',
                'name_en'      => 'Poland',
                'alpha_2_code' => 'PL',
            ],
            [
                'name_fa'      => 'پرتغال',
                'name_en'      => 'Portugal',
                'alpha_2_code' => 'PT',
            ],
            [
                'name_fa'      => 'پورتوریکو',
                'name_en'      => 'Puerto Rico',
                'alpha_2_code' => 'PR',
            ],
            [
                'name_fa'      => 'قطر',
                'name_en'      => 'Qatar',
                'alpha_2_code' => 'QA',
            ],
            [
                'name_fa'      => 'رئونیون',
                'name_en'      => 'Réunion',
                'alpha_2_code' => 'RE',
            ],
            [
                'name_fa'      => 'رومانی',
                'name_en'      => 'Romania',
                'alpha_2_code' => 'RO',
            ],
            [
                'name_fa'      => 'روسیه',
                'name_en'      => 'Russia',
                'alpha_2_code' => 'RU',
            ],
            [
                'name_fa'      => 'رواندا',
                'name_en'      => 'Rwanda',
                'alpha_2_code' => 'RW',
            ],
            [
                'name_fa'      => 'سینت هلینا',
                'name_en'      => 'Saint Helena, Ascension andTristan da Cunha',
                'alpha_2_code' => 'SH',
            ],
            [
                'name_fa'      => 'سنت کیتس و نویس',
                'name_en'      => 'Saint Kitts and Nevis',
                'alpha_2_code' => 'KN',
            ],
            [
                'name_fa'      => 'سنت لوسیا',
                'name_en'      => 'Saint Lucia',
                'alpha_2_code' => 'LC',
            ],
            [
                'name_fa'      => 'سنت پیر و ماژلان',
                'name_en'      => 'Saint Pierre andMiquelon',
                'alpha_2_code' => 'PM',
            ],
            [
                'name_fa'      => 'سنت وینسنت و گرنادین‌ها',
                'name_en'      => 'St. Vincentand the Grenadines',
                'alpha_2_code' => 'VC',
            ],
            [
                'name_fa'      => 'ساموآ',
                'name_en'      => 'Samoa',
                'alpha_2_code' => 'WS',
            ],
            [
                'name_fa'      => 'سن مارینو',
                'name_en'      => 'San Marino',
                'alpha_2_code' => 'SM',
            ],
            [
                'name_fa'      => 'سائوتومه و پرنسیپ',
                'name_en'      => 'Sao Tome and Principe',
                'alpha_2_code' => 'ST',
            ],
            [
                'name_fa'      => 'عربستان سعودی',
                'name_en'      => 'Saudi Arabia',
                'alpha_2_code' => 'SA',
            ],
            [
                'name_fa'      => 'سنگال',
                'name_en'      => 'Senegal',
                'alpha_2_code' => 'SN',
            ],
            [
                'name_fa'      => 'صربستان',
                'name_en'      => 'Serbia',
                'alpha_2_code' => 'RS',
            ],
            [
                'name_fa'      => 'سیشل',
                'name_en'      => 'Seychelles',
                'alpha_2_code' => 'SC',
            ],
            [
                'name_fa'      => 'سیرالئون',
                'name_en'      => 'Sierra Leone',
                'alpha_2_code' => 'SL',
            ],
            [
                'name_fa'      => 'سنگاپور',
                'name_en'      => 'Singapore',
                'alpha_2_code' => 'SG',
            ],
            [
                'name_fa'      => 'اسلواکی',
                'name_en'      => 'Slovakia',
                'alpha_2_code' => 'SK',
            ],
            [
                'name_fa'      => 'اسلوونی',
                'name_en'      => 'Slovenia',
                'alpha_2_code' => 'SI',
            ],
            [
                'name_fa'      => 'جزایر سلیمان',
                'name_en'      => 'Solomon Islands',
                'alpha_2_code' => 'SB',
            ],
            [
                'name_fa'      => 'سومالی',
                'name_en'      => 'Somalia',
                'alpha_2_code' => 'SO',
            ],
            [
                'name_fa'      => 'آفریقای جنوبی',
                'name_en'      => 'South Africa',
                'alpha_2_code' => 'ZA',
            ],
            [
                'name_fa'      => 'جورجیای جنوبی و جزایر ساندویچ جنوبی',
                'name_en'      => 'South Georgia and the South Sandwich Islands',
                'alpha_2_code' => 'GS',
            ],
            [
                'name_fa'      => 'اسپانیا',
                'name_en'      => 'Spain',
                'alpha_2_code' => 'ES',
            ],
            [
                'name_fa'      => 'سری‌لانکا',
                'name_en'      => 'Sri Lanka',
                'alpha_2_code' => 'LK',
            ],
            [
                'name_fa'      => 'سودان',
                'name_en'      => 'Sudan',
                'alpha_2_code' => 'SD',
            ],
            [
                'name_fa'      => 'سورینام',
                'name_en'      => 'Suriname',
                'alpha_2_code' => 'SR',
            ],
            [
                'name_fa'      => 'سوالبارد و یان ماین',
                'name_en'      => 'Svalbard and JanMayen',
                'alpha_2_code' => 'SJ',
            ],
            [
                'name_fa'      => 'سوازیلند',
                'name_en'      => 'Swaziland',
                'alpha_2_code' => 'SZ',
            ],
            [
                'name_fa'      => 'سوئد',
                'name_en'      => 'Sweden',
                'alpha_2_code' => 'SE',
            ],
            [
                'name_fa'      => 'سوئیس',
                'name_en'      => 'Switzerland',
                'alpha_2_code' => 'CH',
            ],
            [
                'name_fa'      => 'سوریه',
                'name_en'      => 'Syrian Arab Republic',
                'alpha_2_code' => 'SY',
            ],
            [
                'name_fa'      => 'تاجیکستان',
                'name_en'      => 'Tajikistan',
                'alpha_2_code' => 'TJ',
            ],
            [
                'name_fa'      => 'تانزانیا',
                'name_en'      => 'Tanzania, United Republic of',
                'alpha_2_code' => 'TZ',
            ],
            [
                'name_fa'      => 'تایلند',
                'name_en'      => 'Thailand',
                'alpha_2_code' => 'TH',
            ],
            [
                'name_fa'      => 'تیمور شرقی',
                'name_en'      => 'Timor-Leste',
                'alpha_2_code' => 'TL',
            ],
            [
                'name_fa'      => 'توگو',
                'name_en'      => 'Togo',
                'alpha_2_code' => 'TG',
            ],
            [
                'name_fa'      => 'توکلائو',
                'name_en'      => 'Tokelau',
                'alpha_2_code' => 'TK',
            ],
            [
                'name_fa'      => 'تونگا',
                'name_en'      => 'Tonga',
                'alpha_2_code' => 'TO',
            ],
            [
                'name_fa'      => 'ترینیداد و توباگو',
                'name_en'      => 'Trinidad and Tobago',
                'alpha_2_code' => 'TT',
            ],
            [
                'name_fa'      => 'تونس',
                'name_en'      => 'Tunisia',
                'alpha_2_code' => 'TN',
            ],
            [
                'name_fa'      => 'ترکیه',
                'name_en'      => 'Turkey',
                'alpha_2_code' => 'TR',
            ],
            [
                'name_fa'      => 'ترکمنستان',
                'name_en'      => 'Turkmenistan',
                'alpha_2_code' => 'TM',
            ],
            [
                'name_fa'      => 'جزایر تورکس و کایکوس',
                'name_en'      => 'Turks and CaicosIslands',
                'alpha_2_code' => 'TC',
            ],
            [
                'name_fa'      => 'تووالو',
                'name_en'      => 'Tuvalu',
                'alpha_2_code' => 'TV',
            ],
            [
                'name_fa'      => 'اوگاندا',
                'name_en'      => 'Uganda',
                'alpha_2_code' => 'UG',
            ],
            [
                'name_fa'      => 'اوکراین',
                'name_en'      => 'Ukraine',
                'alpha_2_code' => 'UA',
            ],
            [
                'name_fa'      => 'امارات متحده عربی',
                'name_en'      => 'United Arab Emirates',
                'alpha_2_code' => 'AE',
            ],
            [
                'name_fa'      => 'بریتانیا',
                'name_en'      => 'United Kingdom',
                'alpha_2_code' => 'GB',
            ],
            [
                'name_fa'      => 'ایالات متحده آمریکا',
                'name_en'      => 'United States',
                'alpha_2_code' => 'US',
            ],
            [
                'name_fa'      => 'جزایر کوچک حاشیه‌ای ایالات متحده',
                'name_en'      => 'United States Minor Outlying Islands',
                'alpha_2_code' => 'UM',
            ],
            [
                'name_fa'      => 'اروگوئه',
                'name_en'      => 'Uruguay',
                'alpha_2_code' => 'UY',
            ],
            [
                'name_fa'      => 'ازبکستان',
                'name_en'      => 'Uzbekistan',
                'alpha_2_code' => 'UZ',
            ],
            [
                'name_fa'      => 'وانواتو',
                'name_en'      => 'Vanuatu',
                'alpha_2_code' => 'VU',
            ],
            [
                'name_fa'      => 'ونزوئلا',
                'name_en'      => 'Venezuela',
                'alpha_2_code' => 'VE',
            ],
            [
                'name_fa'      => 'ویتنام',
                'name_en'      => 'Vietnam',
                'alpha_2_code' => 'VN',
            ],
            [
                'name_fa'      => 'جزایر ویرجین انگلستان',
                'name_en'      => 'Virgin Islands,British',
                'alpha_2_code' => 'VG',
            ],
            [
                'name_fa'      => 'جزایر ویرجین ایالات متحده',
                'name_en'      => 'VirginIslands, U.S.',
                'alpha_2_code' => 'VI',
            ],
            [
                'name_fa'      => 'والیس و فوتونا',
                'name_en'      => 'Wallis and Futuna',
                'alpha_2_code' => 'WF',
            ],
            [
                'name_fa'      => 'صحرای غربی',
                'name_en'      => 'Western Sahara',
                'alpha_2_code' => 'EH',
            ],
            [
                'name_fa'      => 'یمن',
                'name_en'      => 'Yemen',
                'alpha_2_code' => 'YE',
            ],
            [
                'name_fa'      => 'زامبیا',
                'name_en'      => 'Zambia',
                'alpha_2_code' => 'ZM',
            ],
            [
                'name_fa'      => 'زیمبابوه',
                'name_en'      => 'Zimbabwe',
                'alpha_2_code' => 'ZW',
            ],
        ];
        Country::insert($countries);
    }
};
