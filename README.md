<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Aturcara Penggunaan Laragon, Laravel dan Oracle

- Download Oracle Database, Oracle Instant Client dan PECL OCI
- Pindahkan file oci kedalam laragon/bin/php/ext
- Pindahkan file .dll dari intstant client kedalam laragon/bin/apache
- Enable extension php dalam laragon oci8_19 *mungkin berbeza dan pdo_oci
- Tukar host apache ke 8080
- Tukar servername Laragon ke Laragon:8080
- Untuk lebih kemudahan, muat turun Oracle SQL Developer
- Lihat file tsnames.ora didalam oracle/product/server/network/admin (* kena pandai belek path)
- Semak file ociconnect.php dalam folder public sebagai rujukan test connection
- Install Yajra package untuk oracle [disini](https://yajrabox.com/docs/laravel-oci8)
