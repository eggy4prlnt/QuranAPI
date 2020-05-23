# Al Quran Rest API

[![N|Solid](https://img.pngio.com/lumen-logo-api-framework-nordic-apis-lumen-png-558_246.png)](https://lumen.laravel.com)

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

**A Simple Al Quran API**

## Cofiguration
Add .env file for database connection configuration.

## Instalation
- Import database.sql
- Setup
    - `composer install`
    - `php -S localhost:1337 -t public`

## Documentation
| Method  |  Endpoints  | Usage | Example | Description |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| GET  | /surat/{last}/{next}  | Menampilkan surat berdasarkan jumlah surat   | /surat/1/36 | Menampilkan surat mulai dari 1 sampai 36. |
| GET  |  /ayat/{id_surat}/{last}/{next}  | Menampilkan ayat berdasarkan id surat | /ayat/2/15/10 | Menampilkan 10 ayat mulai dari ayat 15 surat ke 2 |

	# url /surat/1/3
	  # Response
         [{
              "id":1,
              "nama_surat":"Al-Fatihah",
              "text_surat":"الفاتحة",
              "tejemahan_surat":"Pembukaan",
              "juml_ayat":7
           },
           {
              "id":2,
              "nama_surat":"Al-Baqarah",
              "text_surat":"البقرة",
              "tejemahan_surat":"Sapi",
              "juml_ayat":286
           },
           {
              "id":3,
              "nama_surat":"Ali 'Imran",
              "text_surat":"اٰل عمران",
              "tejemahan_surat":"Keluarga Imran",
              "juml_ayat":200
           }]
           
	# url /ayat/114/0/6
	  # Response
			[{
			      "id":6230,
			      "id_surat":114,
			      "ayat":1,
			      "text_ayat":"قُلْ اَعُوْذُ بِرَبِّ النَّاسِۙ",
			      "arti_ayat":"Katakanlah, “Aku berlindung kepada Tuhannya manusia,",
			      "latin_ayat":"qul a'ụżu birabbin-nās"
			   },
			   {
			      "id":6231,
			      "id_surat":114,
			      "ayat":2,
			      "text_ayat":"مَلِكِ النَّاسِۙ",
			      "arti_ayat":"Raja manusia,",
			      "latin_ayat":"malikin-nās"
			   },
			   {
			      "id":6232,
			      "id_surat":114,
			      "ayat":3,
			      "text_ayat":"اِلٰهِ النَّاسِۙ",
			      "arti_ayat":"sembahan manusia,",
			      "latin_ayat":"ilāhin-nās"
			   },
			   {
			      "id":6233,
			      "id_surat":114,
			      "ayat":4,
			      "text_ayat":"مِنْ شَرِّ الْوَسْوَاسِ ەۙ الْخَنَّاسِۖ",
			      "arti_ayat":"dari kejahatan (bisikan) setan yang bersembunyi,",
			      "latin_ayat":"min syarril-waswāsil-khannās"
			   },
			   {
			      "id":6234,
			      "id_surat":114,
			      "ayat":5,
			      "text_ayat":"الَّذِيْ يُوَسْوِسُ فِيْ صُدُوْرِ النَّاسِۙ",
			      "arti_ayat":"yang membisikkan (kejahatan) ke dalam dada manusia,",
			      "latin_ayat":"allażī yuwaswisu fī ṣudụrin-nās"
			   },
			   {
			      "id":6235,
			      "id_surat":114,
			      "ayat":6,
			      "text_ayat":"مِنَ الْجِنَّةِ وَالنَّاسِ",
			      "arti_ayat":"dari (golongan) jin dan manusia.”",
			      "latin_ayat":"minal-jinnati wan-nās"
			   }]
		     



## Licence
MIT
