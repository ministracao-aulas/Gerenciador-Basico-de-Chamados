<?php

namespace App\Enums;

use App\Libs\Core\Enums\Enum;

class BusinessCategory extends Enum
{
    const VAREJO_MOVEIS_EQUIPAMENTOS_PECAS             = 1;
    const TRANSPORTES                                  = 2;
    const TELECOMUNICACOES                             = 3;
    const SUPERMERCADO                                 = 4;
    const SOFTWARE_TI                                  = 5;
    const SERVICOS_JURIDICOS                           = 6;
    const SERVICOS_FINANCEIROS                         = 7;
    const SERVICOS_DOMESTICOS_LIMPEZA_E_CONSERVACAO    = 8;
    const SERVICOS_AUTOMOTIVOS                         = 9;
    const SEGURANCA_E_VIGILANCIA                       = 10;
    const SEGURADORAS                                  = 11;
    const SAUDE_E_ESTETICA                             = 12;
    const ROUPAS_E_ACESSORIOS                          = 13;
    const RH                                           = 14;
    const RESTAURANTES_E_BARES                         = 15;
    const PETS                                         = 16;
    const ORGAOS_PUBLICOS                              = 17;
    const IND_QUIMICOS_PLASTICOS_MADEIRA_PAPEL_E_METAL = 18;
    const IND_PRODUTOS_ALIMENTICIOS                    = 19;
    const IND_MAQUINAS_E_EQUIPAMENTOS                  = 20;
    const IMOBILIARIAS_E_CONDOMINIOS                   = 21;
    const HOTEIS_TURISMO_E_AFINS                       = 22;
    const ENERGIA_E_COMBUSTIVEIS                       = 23;
    const EDUCACAO_E_TREINAMENTO                       = 24;
    const DIVERSAO_RECREACAO_E_EVENTOS                 = 25;
    const CONTABILIDADE                                = 26;
    const CONSTRUCAO                                   = 27;
    const COMUNICACAO_MARKETING                        = 28;
    const CEMITERIOS_E_FUNERARIAS                      = 29;
    const ASSOCIACOES_E_ONGS                           = 30;
    const IGREJAS                                      = 31;
    const ENTIDADES_RELIGIOSAS                         = 32;
    const AGRONEGOCIO                                  = 33;
    const OUTROS                                       = 34;

    protected static array $enums = [
        self::VAREJO_MOVEIS_EQUIPAMENTOS_PECAS             => 'Varejo Mov??is/Equipamentos/Pe??as',
        self::TRANSPORTES                                  => 'Transportes',
        self::TELECOMUNICACOES                             => 'Telecomunica????es',
        self::SUPERMERCADO                                 => 'Supermercado',
        self::SOFTWARE_TI                                  => 'Software/TI',
        self::SERVICOS_JURIDICOS                           => 'Servi??os Jur??dicos',
        self::SERVICOS_FINANCEIROS                         => 'Servi??os Financeiros',
        self::SERVICOS_DOMESTICOS_LIMPEZA_E_CONSERVACAO    => 'Servi??os Dom??sticos/Limpeza e Conserva????o',
        self::SERVICOS_AUTOMOTIVOS                         => 'Servi??os Automotivos',
        self::SEGURANCA_E_VIGILANCIA                       => 'Seguran??a e Vigil??ncia',
        self::SEGURADORAS                                  => 'Seguradoras',
        self::SAUDE_E_ESTETICA                             => 'Sa??de e Est??tica',
        self::ROUPAS_E_ACESSORIOS                          => 'Roupas e Acess??rios',
        self::RH                                           => 'RH',
        self::RESTAURANTES_E_BARES                         => 'Restaurantes e Bares',
        self::PETS                                         => 'Pets',
        self::ORGAOS_PUBLICOS                              => 'Org??os P??blicos',
        self::IND_QUIMICOS_PLASTICOS_MADEIRA_PAPEL_E_METAL => 'Ind Qu??micos/Pl??sticos/Madeira/Papel e Metal',
        self::IND_PRODUTOS_ALIMENTICIOS                    => 'Ind Produtos aliment??cios',
        self::IND_MAQUINAS_E_EQUIPAMENTOS                  => 'Ind M??quinas e Equipamentos',
        self::IMOBILIARIAS_E_CONDOMINIOS                   => 'Imobili??rias e Condom??nios',
        self::HOTEIS_TURISMO_E_AFINS                       => 'Hot??is/Turismo e afins',
        self::ENERGIA_E_COMBUSTIVEIS                       => 'Energia e Combust??veis',
        self::EDUCACAO_E_TREINAMENTO                       => 'Educa????o e Treinamento',
        self::DIVERSAO_RECREACAO_E_EVENTOS                 => 'Divers??o/Recrea????o e Eventos',
        self::CONTABILIDADE                                => 'Contabilidade',
        self::CONSTRUCAO                                   => 'Constru????o',
        self::COMUNICACAO_MARKETING                        => 'Comunica????o/Marketing',
        self::CEMITERIOS_E_FUNERARIAS                      => 'Cemit??rios e Funer??rias',
        self::ASSOCIACOES_E_ONGS                           => 'Associa????es e ONGs',
        self::IGREJAS                                      => 'Igrejas',
        self::ENTIDADES_RELIGIOSAS                         => 'Entidades religiosas',
        self::AGRONEGOCIO                                  => 'Agroneg??cio',
        self::OUTROS                                       => 'Outros',
    ];
}
