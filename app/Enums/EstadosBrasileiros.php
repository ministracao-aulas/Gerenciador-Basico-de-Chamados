<?php

namespace App\Enums;

use App\Libs\Core\Enums\Enum;

class EstadosBrasileiros extends Enum
{
    const AC = 1;
    const AL = 2;
    const AP = 3;
    const AM = 4;
    const BA = 5;
    const CE = 6;
    const DF = 7;
    const ES = 8;
    const GO = 9;
    const MA = 10;
    const MT = 11;
    const MS = 12;
    const MG = 13;
    const PA = 14;
    const PB = 15;
    const PR = 16;
    const PE = 17;
    const PI = 18;
    const RJ = 19;
    const RN = 20;
    const RS = 21;
    const RO = 22;
    const RR = 23;
    const SC = 24;
    const SP = 25;
    const SE = 26;
    const TO = 27;

    protected static array $enums = [
        self::AC => 'Acre',
        self::AL => 'Alagoas',
        self::AP => 'Amapá',
        self::AM => 'Amazonas',
        self::BA => 'Bahia',
        self::CE => 'Ceará',
        self::DF => 'Distrito Federal',
        self::ES => 'Espírito Santo',
        self::GO => 'Goiás',
        self::MA => 'Maranhão',
        self::MT => 'Mato Grosso',
        self::MS => 'Mato Grosso do Sul',
        self::MG => 'Minas Gerais',
        self::PA => 'Pará',
        self::PB => 'Paraíba',
        self::PR => 'Paraná',
        self::PE => 'Pernambuco',
        self::PI => 'Piauí',
        self::RJ => 'Rio de Janeiro',
        self::RN => 'Rio Grande do Norte',
        self::RS => 'Rio Grande do Sul',
        self::RO => 'Rondônia',
        self::RR => 'Roraima',
        self::SC => 'Santa Catarina',
        self::SP => 'São Paulo',
        self::SE => 'Sergipe',
        self::TO => 'Tocantins',
    ];
}
